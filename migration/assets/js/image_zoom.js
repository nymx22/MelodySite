(() => {
  function isZoomableImage(el) {
    if (!el || el.tagName !== "IMG") return false;
    if (el.closest(".ms-zoom-overlay")) return false;
    if (el.hasAttribute("data-no-zoom")) return false;
    if (!el.getAttribute("src")) return false;
    return true;
  }

  function ensureOverlay() {
    let overlay = document.querySelector(".ms-zoom-overlay");
    if (overlay) return overlay;

    overlay = document.createElement("div");
    overlay.className = "ms-zoom-overlay";
    overlay.setAttribute("role", "dialog");
    overlay.setAttribute("aria-modal", "true");
    overlay.setAttribute("aria-label", "Image zoom");

    const img = document.createElement("img");
    img.className = "ms-zoom-image";
    img.alt = "";
    img.draggable = false;

    overlay.appendChild(img);
    document.body.appendChild(overlay);

    overlay.addEventListener("click", (e) => {
      // Click backdrop closes; clicking the image also closes (simple UX)
      e.preventDefault();
      closeOverlay();
    });

    return overlay;
  }

  function openOverlayFromImage(sourceImg) {
    const overlay = ensureOverlay();
    const overlayImg = overlay.querySelector("img");
    if (!overlayImg) return;

    const src = sourceImg.currentSrc || sourceImg.src;
    overlayImg.src = src;
    overlayImg.alt = sourceImg.alt || "Zoomed image";

    overlay.classList.add("is-open");
    document.documentElement.classList.add("ms-zoom-open");
    document.body.classList.add("ms-zoom-open");
  }

  function closeOverlay() {
    const overlay = document.querySelector(".ms-zoom-overlay");
    if (!overlay) return;
    overlay.classList.remove("is-open");
    document.documentElement.classList.remove("ms-zoom-open");
    document.body.classList.remove("ms-zoom-open");

    const overlayImg = overlay.querySelector("img");
    if (overlayImg) {
      // Release memory / stop network retry if bad URL
      overlayImg.removeAttribute("src");
      overlayImg.alt = "";
    }
  }

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeOverlay();
  });

  // Event delegation so it works for dynamically swapped images (slider)
  document.addEventListener("click", (e) => {
    const target = e.target;
    if (!(target instanceof Element)) return;

    if (!isZoomableImage(target)) return;
    e.preventDefault();
    openOverlayFromImage(target);
  });
})();

