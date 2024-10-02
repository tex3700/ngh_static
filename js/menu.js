
document.addEventListener("DOMContentLoaded", function () {
    var header = document.querySelector(".main-nav");
    var svgElement = document.querySelector('.main-logo');
    var langElement = document.querySelector('.languages');
    var cButton = document.querySelector('.contacts-button');

    window.addEventListener("scroll", function () {
        var scrollPosition = window.scrollY;

        if (scrollPosition > 100) {
            header.style.background = "rgba(255,255,255,0.8)";
            svgElement.textContent = "";
            svgElement.style.backgroundImage = 'url("/img/VecNGH1_S%201.svg")'
            langElement.style.display = "none";
            cButton.style.marginRight = "60px"
            document.querySelectorAll(".main-menu a").forEach(function (item) {
                item.style.color = "#2F3034";
            });
        } else {
            header.style.background = "none";
            svgElement.style.backgroundImage = "unset";
            svgElement.textContent = "НефтеГазХим";
            //svgElement.style.backgroundImage = 'url("/img/VecNGH1_22_263 1.svg")'
            langElement.style.display = "block";
            cButton.style.marginRight = "10px"
            document.querySelectorAll(".main-menu a").forEach(function (item) {
                item.style.color = "#FFF";
            });
        }
    });
});
