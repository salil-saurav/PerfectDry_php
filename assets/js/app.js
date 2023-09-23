

$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    // items: 3,
    autoplay: true,
    autoplayTimeout: 4000,
    center: true,
    dots: true,
    dotsEach: 1,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      426: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  $('.owl-prev span[aria-label="Previous"]').html(
    `<svg class="carousel-prev" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>`
  ); // Left arrow symbol

  $('.owl-next span[aria-label="Next"]').html(
    `<svg class="carousel-next" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>`
  ); // Right arrow symbol
});


(() => {
  "use strict";

  const forms = document.querySelectorAll(".needs-validation");

  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

//                 submit form handler

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementsByClassName("contact-form");
  const scrollToFormButton = document.querySelectorAll(".scrollToFormButton");

  scrollToFormButton.forEach((btn) => {
    btn.addEventListener("click", () => {
      form.scrollIntoView({ behavior: "smooth" });
    });
  });
});
