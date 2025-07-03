/**
 * Dynamic Copyright Year
 *
 * Replaces content of any span with the id 'sp-dynamic-copyright-year' to the current year.
 *
 * @package SPTheme
 * @since 0.1.12
 */

 document.addEventListener("DOMContentLoaded", function () {
     const currentYear = new Date().getFullYear();
     document.getElementById("sp-dynamic-copyright-year").textContent = currentYear;
 });
