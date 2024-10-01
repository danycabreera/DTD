      document.addEventListener("DOMContentLoaded", function() {
      let currentSlide = 0;
      const slides = document.querySelectorAll('.slide');
      
      function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlide();
      }
      
      function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateSlide();
      }
      
      function updateSlide() {
        const slider = document.querySelector('.slides');
        const slideWidth = slides[0].clientWidth;
        slider.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
      }
      
      setInterval(nextSlide, 3000);
    });

    function addToCart(productId) {
      alert('Producto ' + productId + ' añadido al carrito');
    }