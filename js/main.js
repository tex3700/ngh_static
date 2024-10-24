document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".pic").forEach(function (pic) {
        pic.addEventListener("click", function () {
            document.querySelectorAll(".pic").forEach(function (pic) {
                pic.classList.toggle("away"); // Toggle 'away' class on all elements with 'pic' class
            });
            this.classList.remove("away"); // Remove 'away' class from the clicked element
            this.classList.toggle("active"); // Toggle 'active' class on the clicked element
        });
    });

    const boxes = document.querySelectorAll(".box-wrapper");
    const cards = document.querySelectorAll(".ma-vcard");

    function activateTab(box) {
        boxes.forEach((t) => t.classList.remove("active"));
        box.classList.add("active");
    }

    function hoverTab(card) {
        cards.forEach((t) => t.classList.remove("m-hover"));
        card.classList.add("m-hover");
    }

    boxes.forEach((box) => {
        box.addEventListener("mouseover", () => {
            activateTab(box);
        });

        box.addEventListener("click", () => {
            activateTab(box);
        });
    });

    cards.forEach((card) => {
        card.addEventListener("mouseover", () => {
            hoverTab(card);
        });

        card.addEventListener("click", () => {
            hoverTab(card);
        });
    });
});