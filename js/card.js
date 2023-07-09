var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000, // Adjust the delay (in milliseconds) as needed
      disableOnInteraction: false, // Allow user interaction without stopping autoplay
    },
  });
  
  var sliderContainer = document.querySelector('.tranding-slider');
  
  sliderContainer.addEventListener('mouseenter', function() {
    TrandingSlider.autoplay.stop();
  });
  
  sliderContainer.addEventListener('mouseleave', function() {
    TrandingSlider.autoplay.start();
  });
  