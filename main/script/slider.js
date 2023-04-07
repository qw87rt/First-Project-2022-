
    window.onload = function() {
    const slider = document.querySelector("#slider");
    const slides = slider.querySelectorAll(".slide");
    // ... rest of the code
    let currentSlide = 0;

  function goToSlide(index) {
    slides[currentSlide].classList.remove("active");
    currentSlide = (index + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");
  }

  setInterval(function() {
    goToSlide(currentSlide + 1);
  }, 3000);
  };


