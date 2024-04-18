const navigationButton = document.getElementById("navigation-button");

function toggleExpansion() {
  const isExpanded = navigationButton.getAttribute("aria-expanded") === "true";
  navigationButton.setAttribute("aria-expanded", String(!isExpanded));
}

navigationButton.addEventListener("click", toggleExpansion);
