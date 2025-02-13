import $ from "jquery";
window.jQuery = $;
window.$ = $;

// Debugging
console.log("jQuery version:", $.fn ? $.fn.jquery : "Not loaded");

// Ensure jQuery is loaded before the plugins
import "admin-lte";
import "./bootstrap";

// // Delay loading plugins to ensure jQuery is available
// setTimeout(() => {
//     import("./plugins.min.js").then(() => {
//         console.log("plugins.min.js loaded successfully");
//     }).catch((error) => {
//         console.error("Error loading plugins.min.js:", error);
//     });
// }, 100);
