document.addEventListener("DOMContentLoaded", function () {
    var New = document.querySelector(".New");
    var nav = document.querySelector(".nav");

    New.addEventListener("click", function () {
        nav.classList.toggle("open");
        New.classList.toggle("click");
    });
});

    var typed = new Typed(".input", {
        strings: [" Java Developer", " Java Developer"],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
    });
