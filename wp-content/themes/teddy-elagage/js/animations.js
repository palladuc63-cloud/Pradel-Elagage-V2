document.addEventListener("DOMContentLoaded", function () {
  var animatedElements = document.querySelectorAll(".animated-element");

  animatedElements.forEach(function (element) {
    element.classList.add("animate");
  });
});

// document.addEventListener("scroll", function () {
//     var animatedElements2 = document.querySelectorAll(".animated-separator");
//     var windowHeight = window.innerHeight;
//     animatedElements2.forEach(function (element) {
//         var elementOffset = element.getBoundingClientRect().top;
//         if (elementOffset < windowHeight * 1.5) {
//             element.classList.add("animate-2");
//         }
//     });
// });

document.addEventListener("scroll", function () {
  var animatedElements2 = document.querySelectorAll(".animated-element-2");

  var windowHeight = window.innerHeight;

  animatedElements2.forEach(function (element) {
    var elementOffset = element.getBoundingClientRect().top;

    if (elementOffset < windowHeight * 1) {
      element.classList.add("animate");
    }
  });
});
