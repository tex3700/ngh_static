
document.addEventListener("DOMContentLoaded", function() {
    var header = document.querySelector(".main-nav");
    var svgElement = document.querySelector('.main-logo');
    var langElement = document.querySelector('.languages');

    window.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY;

        if (scrollPosition > 100) {
            header.style.background = "rgba(255,255,255,0.8)";
            svgElement.classList.add('scroll-invert');
            langElement.style.visibility = "hidden";
            document.querySelectorAll(".main-menu a").forEach(function(item) {
                item.style.color = "#2F3034";
            });
        } else {
            header.style.background = "none";
            svgElement.classList.remove('scroll-invert');
            langElement.style.visibility = "visible";
            document.querySelectorAll(".main-menu a").forEach(function(item) {
                item.style.color = "#FFF";
            });
        }
    });
});
