document.addEventListener("DOMContentLoaded", () => {
  const tocCards = document.querySelectorAll(".toc-card");
  if (!tocCards.length) return;

  const slugify = (text) =>
    (text || "")
      .toLowerCase()
      .trim()
      .replace(/[^a-z0-9\s-]/g, "")
      .replace(/\s+/g, "-")
      .replace(/-+/g, "-");

  const isExcluded = (el) => !!el.closest("header, footer, .faq-section, .toc-card");

  const ensureId = (el) => {
    if (el.id) return el.id;
    let base = slugify(el.textContent) || "section";
    let id = base;
    let i = 2;
    while (document.getElementById(id)) id = `${base}-${i++}`;
    el.id = id;
    return id;
  };

  const comesAfter = (a, b) =>
    !!(a && b && (a.compareDocumentPosition(b) & Node.DOCUMENT_POSITION_FOLLOWING));

  const getFirstVisible = (selector) =>
    Array.from(document.querySelectorAll(selector))
      .filter((el) => !isExcluded(el))
      .find((el) => (el.textContent || "").trim().length > 0) || null;

  const findGiftCodeH2 = () => {
    const h2s = Array.from(document.querySelectorAll("h2")).filter(
      (h) => !isExcluded(h) && (h.textContent || "").trim().length > 0
    );

    // Prefer exact match
    const exact = h2s.find(
      (h) => (h.textContent || "").trim() === "1 Lottery Game Gift Code (Updated Regularly)"
    );
    if (exact) return exact;

    // Fallback: contains "gift code" and "updated"
    const fuzzy = h2s.find((h) => {
      const t = (h.textContent || "").toLowerCase();
      return t.includes("gift code") && t.includes("updated");
    });
    return fuzzy || null;
  };

  const isHomePage = () => {
    const canonical = document.querySelector('link[rel="canonical"]');
    if (!canonical || !canonical.href) return false;
    try {
      const pathname = new URL(canonical.href).pathname || "";
      return pathname === "/" || pathname === "/index.php";
    } catch (e) {
      return false;
    }
  };

  tocCards.forEach((card) => {
    const listEl = card.querySelector("[data-toc]");
    const toggleBtn = card.querySelector(".toc-toggle");
    const panel = card.querySelector(".toc-panel");
    if (!listEl || !toggleBtn || !panel) return;

    // Build list from H2 only (exclude FAQ + TOC + header/footer)
    const h2s = Array.from(document.querySelectorAll("h2"))
      .filter((h) => !isExcluded(h))
      .filter((h) => (h.textContent || "").trim().length > 0);

    listEl.innerHTML = "";

    h2s.forEach((h2) => {
      const id = ensureId(h2);
      const li = document.createElement("li");
      const a = document.createElement("a");
      a.href = `#${id}`;
      a.textContent = (h2.textContent || "").trim();
      li.appendChild(a);
      listEl.appendChild(li);
    });

    if (!h2s.length) {
      card.style.display = "none";
      return;
    }

    const setExpanded = (expanded) => {
      toggleBtn.setAttribute("aria-expanded", expanded ? "true" : "false");
      panel.hidden = !expanded;
      card.classList.toggle("is-open", expanded);
    };

    setExpanded(false);

    toggleBtn.addEventListener("click", () => {
      const expanded = toggleBtn.getAttribute("aria-expanded") === "true";
      setExpanded(!expanded);
    });

    card.querySelectorAll(".toc-list a").forEach((a) => {
      a.addEventListener("click", () => setExpanded(false));
    });

    // Respect manual placement
    if (card.hasAttribute("data-toc-static")) return;

    // Homepage: place TOC right before "1 Lottery Game Gift Code (Updated Regularly)"
    if (isHomePage()) {
      const giftH2 = findGiftCodeH2();
      if (giftH2) {
        const giftBeforeEl =
          giftH2.closest(".h2head") ||
          giftH2.closest(".content-block") ||
          giftH2.closest(".heading-surface") ||
          giftH2;

        if (giftBeforeEl && giftBeforeEl.parentNode) {
          giftBeforeEl.parentNode.insertBefore(card, giftBeforeEl);
          return;
        }
      }
    }

    // All other pages: H1 -> intro paragraph(s) -> TOC -> first H2
    const h1 = getFirstVisible("h1");
    const firstH2 = h2s[0] || null;

    if (!h1 || !firstH2) return;

    // Find last paragraph between H1 and first H2 (works even if intro and first H2 share a block)
    const candidatePs = Array.from(document.querySelectorAll("p"))
      .filter((p) => !isExcluded(p))
      .filter((p) => comesAfter(h1, p))
      .filter((p) => comesAfter(p, firstH2));

    const anchorP = candidatePs.length ? candidatePs[candidatePs.length - 1] : null;

    if (anchorP) {
      const anchorBlock =
        anchorP.closest(".content-block") ||
        anchorP.closest(".feature-card") ||
        anchorP.closest("section") ||
        anchorP;

      if (anchorBlock && anchorBlock.parentNode) {
        anchorBlock.insertAdjacentElement("afterend", card);
        return;
      }
    }

    // Fallback: place before first H2
    const beforeEl =
      firstH2.closest(".content-block") || firstH2.closest("section") || firstH2;
    if (beforeEl && beforeEl.parentNode) {
      beforeEl.parentNode.insertBefore(card, beforeEl);
    }
  });
});
