export function usePortal() {
  const closer = document.querySelector("#portal-close");
  const portal = document.querySelector("#portal");
  const portalInner = document.querySelector("#portal-inner");

  return { closePortal, fillPortal, openPortal };

  function closePortal() {
    portal.setAttribute("aria-hidden", true);
    document.documentElement.classList.remove("portal-open");

    closer.removeEventListener("click", closePortal);
    document.removeEventListener("keyup", handlePortalKeyup);
    portal.removeEventListener("click", handlePortalClick);
    portal.removeEventListener("keyup", handlePortalKeyup);

    emptyPortal();
  }

  function emptyPortal() {
    portalInner.innerHTML = "";
  }

  function fillPortal(content) {
    portalInner.innerHTML = content;
  }

  function handlePortalClick(e) {
    if (portalInner.contains(e.target)) return;
    closePortal();
  }

  function handlePortalKeyup(e) {
    if (e.key !== "Escape") return;
    closePortal();
  }

  function openPortal() {
    portal.setAttribute("aria-hidden", false);
    document.documentElement.classList.add("portal-open");

    closer.addEventListener("click", closePortal);
    document.addEventListener("keyup", handlePortalKeyup);
    portal.addEventListener("click", handlePortalClick);
    portal.addEventListener("keyup", handlePortalKeyup);
  }
}
