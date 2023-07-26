export function usePortal() {
  const closer = document.querySelector("#portal-close");
  const portal = document.querySelector("#portal");
  const portalInner = document.querySelector("#portal-inner");

  closer.addEventListener("click", closePortal);
  portal.addEventListener("click", handlePortalClick);
  portal.addEventListener("keyup", handlePortalKeyup);

  return { closePortal, fillPortal, openPortal };

  function closePortal() {
    portal.setAttribute("aria-hidden", true);
    document.removeEventListener("keyup", handlePortalKeyup);
    emptyPortal();
  }

  function emptyPortal() {
    portalInner.innerHTML = "";
  }

  function fillPortal(content) {
    portalInner.innerHTML = content;
  }

  function handlePortalClick(e) {
    if (portalInner.contains(e.target));
    closePortal();
  }

  function handlePortalKeyup(e) {
    if (e.key !== "Escape") return;
    closePortal();
  }

  function openPortal() {
    portal.setAttribute("aria-hidden", false);
    document.addEventListener("keyup", handlePortalKeyup);
  }
}
