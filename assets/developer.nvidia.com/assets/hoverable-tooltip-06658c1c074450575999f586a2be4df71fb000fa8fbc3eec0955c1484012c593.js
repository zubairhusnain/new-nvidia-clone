/**
 * Bootstrap 5 Tooltip Initialization with Enhanced UX
 */
(function() {
  const initTooltips = () => {
    if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
      document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (tooltipTriggerEl) {
        const content = tooltipTriggerEl.getAttribute('data-bs-content');
        if (!content || content.trim() === '') return;

        // Remove existing tooltip
        const existingTooltip = bootstrap.Tooltip.getInstance(tooltipTriggerEl);
        if (existingTooltip) existingTooltip.dispose();

        // Remove old event handlers
        tooltipTriggerEl.removeEventListener("mouseenter", tooltipTriggerEl._tooltipMouseenterHandler);
        tooltipTriggerEl.removeEventListener("mouseleave", tooltipTriggerEl._tooltipMouseleaveHandler);

        const tooltip = new bootstrap.Tooltip(tooltipTriggerEl, {
          title: content,
          trigger: "manual",
          placement: tooltipTriggerEl.getAttribute('data-bs-placement') || 'top',
          html: true
        });

        let tooltipTimeout;
        let currentToolTip;

        // Create named functions for event handlers
        const mouseenterHandler = function () {
          clearTimeout(tooltipTimeout);
          if (tooltipTriggerEl.getAttribute("aria-describedby") != null) return;

          try { tooltip.show(); } catch (error) {}

          const toolTipID = tooltipTriggerEl.getAttribute("aria-describedby");
          currentToolTip = document.querySelector(`#${toolTipID}`);

          if (currentToolTip) {
            // Remove old tooltip element handler
            currentToolTip.removeEventListener("mouseleave", currentToolTip._tooltipMouseleaveHandler);
            
            const tooltipMouseleaveHandler = function () {
              if (!tooltipTriggerEl.matches(":hover")) {
                try { tooltip.hide(); } catch (error) {}
              }
            };
            
            // Save handler reference for later removal
            currentToolTip._tooltipMouseleaveHandler = tooltipMouseleaveHandler;
            currentToolTip.addEventListener("mouseleave", tooltipMouseleaveHandler);
          }
        };

        const mouseleaveHandler = function () {
          tooltipTimeout = setTimeout(function () {
            if (!currentToolTip || !currentToolTip.matches(":hover")) {
              try { tooltip.hide(); } catch (error) {}
            }
          }, 100);
        };

        // Save handler references for later removal
        tooltipTriggerEl._tooltipMouseenterHandler = mouseenterHandler;
        tooltipTriggerEl._tooltipMouseleaveHandler = mouseleaveHandler;

        // Add event handlers
        tooltipTriggerEl.addEventListener("mouseenter", mouseenterHandler);
        tooltipTriggerEl.addEventListener("mouseleave", mouseleaveHandler);
      });
    }
  };

  document.addEventListener('DOMContentLoaded', () => setTimeout(initTooltips, 100));
  window.addEventListener('load', () => setTimeout(initTooltips, 100));
  window.initTooltips = initTooltips;
})();
