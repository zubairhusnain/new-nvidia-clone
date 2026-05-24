(() => {
  document.addEventListener('DOMContentLoaded', function () {
    const containerElements = document.querySelectorAll('[data-react-init-class="CodeContainer"]');
    for (const container of containerElements) {
      const cfg = {
        component: 'CodeContainer',
        targetElement: container
      };
      initializeComponent(cfg);
    }
  });
})();
