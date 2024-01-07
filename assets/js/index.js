const menuButton = document.getElementById("menu-button");

function toggleExpansion() {
  const isExpanded = menuButton.getAttribute("aria-expanded") === "true";
  menuButton.setAttribute("aria-expanded", String(!isExpanded));
}

menuButton.addEventListener("click", toggleExpansion);
