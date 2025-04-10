class A11yButton {
  constructor(button) {
    this.button = button;
    this.button.setAttribute('aria-expanded', 'false');
    this.button.addEventListener('click', () => {
      this.toggleButton();
    });
  }

  toggleButton() {
    const isExpanded = this.button.getAttribute('aria-expanded') === 'true';
    this.button.setAttribute('aria-expanded', String(!isExpanded));
  }
}

const navButton = document.getElementById("navigation-button");
if(navButton) {
  new A11yButton(navButton);
}
