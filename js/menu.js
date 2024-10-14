
document.addEventListener("DOMContentLoaded", function () {
    let header = document.querySelector(".main-nav");
    let logoElement = document.querySelector('.main-logo');
    let nameElement = document.querySelector('.main-logo-text');
    //let logoImage = document.querySelector('.main-logo-img');
    //let langElement = document.querySelector('.languages');
    let cButton = document.querySelector('.contacts-button');
    let spinner = document.querySelectorAll('.spinner');

    window.addEventListener("scroll", function () {
        let scrollPosition = window.scrollY;

        if (scrollPosition > 100) {
            header.style.background = "rgba(255,255,255,0.8)";
            nameElement.textContent = "";
            //logoImage.style.backgroundImage = "unset";
            logoElement.style.marginTop = "20px";
            logoElement.style.backgroundImage = 'url(../img/VecNGH1_S_1.svg)';
            //langElement.style.display = "none";
            cButton.style.marginRight = "30px"
            document.querySelectorAll(".main-menu a").forEach(function (item) {
                item.style.color = "#2F3034";
            });
            spinner.forEach(function (itemSpinner) {
                itemSpinner.style.backgroundColor = "#06255B";
            });
        } else {
            header.style.background = "none";
            logoElement.style.backgroundImage = "unset";
            logoElement.style.marginTop = "0";
            nameElement.textContent = "НефтеГазХим";
            //logoImage.style.backgroundImage = 'url(../img/ngh-logo-colour.png)';
            //langElement.style.display = "block";
            cButton.style.marginRight = "30px"
            document.querySelectorAll(".main-menu a").forEach(function (item) {
                item.style.color = "#FFF";
            });
            spinner.forEach(function (itemSpinner) {
                itemSpinner.style.backgroundColor = "#FFF";
            });
        }
    });
});
