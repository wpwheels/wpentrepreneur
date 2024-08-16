(function ($) {
  "use strict";
  $(document).ready(function () {
    // Dismiss notice functionality
    $(".wpwheels-remove-notice").on("click", function (event) {
      event.preventDefault();
      let $notice = $(this);
      $.ajax({
        type: "POST",
        url: ajaxurl,
        dataType: "json",
        data: {
          action: "wpentrepreneur_dismiss_notice",
          nonce: wpwheelsDashboard.notice_dismiss_nonce,
          dismiss: $notice.data("dismiss"),
          dismiss_type: $notice.data("dismiss-type"),
        },
        success: function () {
          $notice.closest(".wpwheels-notice").fadeOut();
        },
      });
    });

    // Plugin activation and installation from recommended plugins
    let $recommendedPlugins = $(
      ".wpwheels-dashboard-wrapper .starter-template-action a"
    );
    if ($recommendedPlugins) {
      let $pluginInfo = $(
          ".wpwheels-dashboard-wrapper .starter-template-plugins-info"
        ),
        pluginData = $pluginInfo.children(),
        isProcessing = false,
        redirectUrl;

      $recommendedPlugins.on("click", function (event) {
        event.preventDefault();
        if (isProcessing) return;

        let $this = $(this);
        redirectUrl = $this.attr("href");
        processPlugins($this);
      });

      async function processPlugins($element) {
        for (let plugin of pluginData) {
          let $pluginElement = $(plugin),
            actionType = $pluginElement.data("action");

          if (actionType) {
            isProcessing = true;
            if (actionType === "wpentrepreneur_activate_plugin") {
              await activatePlugin($pluginElement, $element);
            } else if (actionType === "wpentrepreneur_install_plugin") {
              await installPlugin($pluginElement, $element);
            }
          }
        }
        isProcessing = true;
        window.location.href = redirectUrl;
      }
    }

    function activatePlugin($element, $targetElement = "") {
      if (!$targetElement) $targetElement = $element;
      $targetElement.addClass("activating");
      $targetElement.text(wpwheelsDashboard.plugin_activating_text);

      return new Promise((resolve, reject) => {
        $.ajax({
          type: "POST",
          url: ajaxurl,
          data: {
            action: "wpentrepreneur_activate_plugin",
            nonce: wpwheelsDashboard.plugin_activate_nonce,
            path: $element.data("path"),
          },
          success: function (response) {
            $targetElement.removeClass("activating");
            if (response.success) {
              $targetElement.text(wpwheelsDashboard.plugin_activated_text);
              $targetElement.addClass("activated");
            }
            resolve();
          },
          error: function (error) {
            reject(error);
          },
        });
      });
    }

    function installPlugin($element, $targetElement = "") {
      if (!$targetElement) $targetElement = $element;
      $targetElement.addClass("installing");
      $targetElement.text(wpwheelsDashboard.plugin_installing_text);

      return new Promise((resolve, reject) => {
        $.ajax({
          type: "POST",
          url: ajaxurl,
          data: {
            action: "wpentrepreneur_install_plugin",
            _ajax_nonce: wpwheelsDashboard.plugin_install_nonce,
            slug: $element.data("slug"),
          },
          success: function (response) {
            $targetElement.removeClass("installing");
            if (response.success) {
              $targetElement.text(wpwheelsDashboard.plugin_installed_text);
              $targetElement.addClass("installed");
              activatePlugin($element, $targetElement)
                .then(function () {
                  resolve();
                })
                .catch(function (error) {
                  reject(error);
                });
            }
          },
          error: function (error) {
            reject(error);
          },
        });
      });
    }
  });
})(jQuery);
