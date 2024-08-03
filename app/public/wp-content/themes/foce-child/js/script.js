
// Script pour le parallax entre le titre et la vidéo //
window.addEventListener('scroll', function() {
    //selectionne l'element avec la classe 'banner__video'
  const parallax = document.querySelector('.banner__video');
    // Stocke la position actuelle du défilement de la page
  let scrollPosition = window.scrollY;
    // Transformation pour deplacer l'element verticalement en fonction de la position du défilement
  parallax.style.transform = 'translateY(' + scrollPosition * 0.6 + 'px)'; /* Ajustez 0.6 selon la vitesse souhaitée, ici l'element se deplace a 60% de la vitesse du defilement de la page*/
})
/********************************************/

// fade*in //

document.addEventListener("DOMContentLoaded", function() {
  const sections = document.querySelectorAll('.fade__in__section');

  // Ajouter un délai progressif pour chaque section
  sections.forEach((section, index) => {
      const delay = index * 400; // Délai de 400ms entre chaque section
      section.style.animationDelay = `${delay}ms`;
  });
});

// Effet slide-in sur titre 

(function () {
    
    // Définir la fonction detectAndAnimate pour basculer la classe des éléments
    const detectAndAnimate = () => {
        // Sélectionner tous les éléments avec la classe 'slide-on-scroll'
        const elements = document.querySelectorAll('.slide-on-scroll');
        // Boucle sur tous les éléments sélectionnés
        elements.forEach(element => {
            // Vérifier si l'élément est visible dans la fenêtre du navigateur
            const isVisible = isElementInViewport(element);
            // Ajouter ou supprimer la classe 'is-visible' en fonction de la visibilité de l'élément
            element.classList.toggle('is-visible', isVisible);
        });
    };
    // Définir la fonction isElementInViewport pour vérifier la visibilité de l'élément dans la fenêtre du navigateur
    const isElementInViewport = el => {
        // Récupérer les dimensions de l'élément
        const rect = el.getBoundingClientRect();
        // Récupérer la hauteur de la fenêtre du navigateur
        const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
        // Récupérer la largeur de la fenêtre du navigateur
        const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
        // Retourner vrai si l'élément est entièrement visible dans la fenêtre du navigateur, sinon retourner faux
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= viewportHeight &&
            rect.right <= viewportWidth
        );
    };
    // Écouter l'événement de défilement de la fenêtre du navigateur et appeler la fonction detectAndAnimate
    window.addEventListener('scroll', detectAndAnimate);
    // Appeler la fonction detectAndAnimate une fois au démarrage pour mettre à jour l'état des éléments
    detectAndAnimate();
})()
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
            nextEl: '.swiper-button-next', // classe pour les boutons de navigations si rajout futur 
            prevEl: '.swiper-button-prev',
        },
        mousewheel: true, // Activer le contrôle par molette
    });
});

// Menu burger //

document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const primaryMenu = document.querySelector('.menu');

  menuToggle.addEventListener('click', function() {
      primaryMenu.classList.toggle('active');
     
      // Met à jour l'état du bouton aria-expanded
      const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
      menuToggle.setAttribute('aria-expanded', !isExpanded);
  });
});
// transformation du bouton du menu burger - l'ajout de la classe open transforme le burger en croix quand le menu est déployé
  const menuToggle = document.querySelector('.menu-toggle');

    menuToggle.addEventListener('click', function() {
    menuToggle.classList.toggle('open'); // quand le menu burger est cliqué, la classe open est ajoutée s'il ne la possède pas déjà, ou supprimée s'il la possède.
    console.log("Ajoute la classe open au menu toggle");
});


// animation au scroll des nuages 

window.addEventListener('scroll', function() {
    const smallCloud = document.getElementById('little-cloud');
    const largeCloud = document.getElementById('big-cloud');
    const place = document.getElementById('place');

    const maxTranslationSmall = 100;
    const maxTranslationLarge = 100; 

    
        const maxScroll = place.scrollHeight - window.innerHeight; 
        const scrollFraction = (window.scrollY - place.offsetTop) / maxScroll; // calcul le scroll en fonction de la hauteur de la section lieu
        const translationSmall = scrollFraction * maxTranslationSmall;
        const translationLarge = scrollFraction * maxTranslationLarge;

        smallCloud.style.transform = `translateX(${translationSmall}px)`;
        largeCloud.style.transform = `translateX(${translationLarge}px)`;
    
})