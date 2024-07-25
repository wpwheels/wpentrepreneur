// Styles
import "./index.css";

// Scripts
import "./notice";

(function () {
  "use strict";
  window.wpwheels = {
    /**
     * Initiate the script to add class name.
     */
    addClass: function () {
      let element = document.querySelectorAll(
        ".ocdi__gl-item-container .ocdi__gl-item"
      );
      if (!element || element.length === 0) {
        return;
      }

      [...element].forEach((el, key) => {
        let item = el.getAttribute("data-categories");
        // Convert the string to an array
        let arr = item.split(",");
        if (arr.indexOf("pro") !== -1) {
          el.classList.add("wpwheels-pro-template");
        }
      });

      let anchors = document.querySelectorAll(
        ".ocdi__gl-item-container .wpwheels-pro-template a.button-primary"
      );
      [...anchors].forEach((el, key) => {
        el.textContent = "Upgrade Now";
        el.setAttribute(
          "href",
          "https://wpwheels.com/plugins/blockwheels-pro/"
        );
        el.setAttribute("target", "__blank");
      });
    },
    /**
     * Initiate the script to modify anchor attributes.
     */
    anchorModify: function () {
      let anchors = document.querySelectorAll(
        ".ocdi__gl-item-container .wpwheels-pro-template a.button-primary"
      );
      [...anchors].forEach((el, key) => {
        el.textContent = "Upgrade Now";
        el.setAttribute(
          "href",
          "https://wpwheels.com/plugins/blockwheels-pro/"
        );
        el.setAttribute("target", "__blank");
      });
    },
    // Initiate when the DOM loads.
    init: function () {
      window.wpwheels.addClass();
      window.wpwheels.anchorModify();
    },
  };
  if ("loading" === document.readyState) {
    // The DOM has not yet been loaded.
    document.addEventListener("DOMContentLoaded", window.wpwheels.init);
  } else {
    // The DOM has already been loaded.
    window.wpwheels.init();
  }
})();
