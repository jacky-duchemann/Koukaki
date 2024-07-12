
// Script pour le parallax entre le titre et la vidéo //
window.addEventListener('scroll', function() {
    //selectionne l'element avec la classe 'banner__video'
  const parallax = document.querySelector('.banner__video');
    // Stocke la position actuelle du défilement de la page
  let scrollPosition = window.scrollY;
    // Transformation pour deplacer l'element verticalement en fonction de la position du défilement
  parallax.style.transform = 'translateY(' + scrollPosition * 0.6 + 'px)'; /* Ajustez 0.6 selon la vitesse souhaitée */
})
/********************************************/

// script pour l'effet d'apparition des titres 

document.addEventListener("DOMContentLoaded", function() {
  const sliders = document.querySelectorAll('.slide-in');

  const appearOptions = {
      threshold: 0,
      rootMargin: "0px 0px -100px 0px"
  };

  const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add("appear");
              appearOnScroll.unobserve(entry.target);
          } else {
              // Réinitialiser l'état si l'élément sort de la vue
              entry.target.classList.remove("appear");
          }
      });
  }, appearOptions);

  sliders.forEach(slider => {
      appearOnScroll.observe(slider);
  });

  // Ajouter un événement de scroll pour réobserver les éléments à chaque défilement
  window.addEventListener('scroll', function() {
      sliders.forEach(slider => {
          if (!appearOnScroll.rootBounds || appearOnScroll.rootBounds.top < 0) {
              // Si la racine n'est pas définie ou est hors de la vue, réobserver l'élément
              appearOnScroll.observe(slider);
          }
      });
  });
});

// fade*in //

document.addEventListener("DOMContentLoaded", function() {
  const sections = document.querySelectorAll('.fade__in__section');

  // Ajouter un délai progressif pour chaque section
  sections.forEach((section, index) => {
      const delay = index * 400; // Délai de 400ms entre chaque section
      section.style.animationDelay = `${delay}ms`;
  });

  // Activer les animations des éléments internes lorsque la section entre dans la vue
  const appearOptions = {
      threshold: 0,
      rootMargin: "0px 0px -100px 0px"
  };

  const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add("appear");
              appearOnScroll.unobserve(entry.target);
          }
      });
  }, appearOptions);

  sections.forEach(section => {
      appearOnScroll.observe(section);
  });
});


// Carousel avec swiper 

document.addEventListener('DOMContentLoaded', function () {
    var mySwiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        mousewheel: true, // Activer le contrôle par molette
    });
});