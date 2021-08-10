let search = document.querySelector('.search');
let h1 = document.querySelector('h1');

document.addEventListener('scroll', ()=> {
    
    
    let positionh1 = h1.getBoundingClientRect().top;
    //let scroll = window.pageYOffset; // position du scroll
    
    //console.log(positionh1);
    //console.log(scroll);
    
    if (positionh1 <= 100) {
        search.classList.add("navFixed");
    } else {
        search.classList.remove("navFixed");
    }
});
    let btnMenuResp = document.querySelector('#btnMenuResp');
    let menu = document.querySelector('#menu');
    menu.style.right = '-25rem';
 
    btnMenuResp.addEventListener('click', () => {
        if (menu.style.right === "-25rem") {
            menu.style.right = "0rem";
            btnMenuResp.classList.add('btnMenuResp--active');

        } else {
            menu.style.right = "-25rem";
            btnMenuResp.classList.remove('btnMenuResp--active');
        }
    });

    





      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.pagination-Description',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          },
          dynamicBullets: true,
        },
      });



      // const buttonsPhoto = [...document.querySelectorAll('.buttonPhotos')];
      // const sliders = [...document.querySelectorAll('.accordeon')];


      // buttonsPhoto.forEach((button, i) => {
      //   button.addEventListener('click', () => {
      //     sliders.forEach((slider, j) => {
      //       j!==i && slider.classList.remove("accordeon--active");
      //     })
      //     sliders[i].classList.toggle("accordeon--active");
      //   });
      // });


      var swiper = new Swiper('.swiper-containerPhoto', {
        slidesPerView: 1,
        spaceBetween: 10,
        centeredSlides: false,
        pagination: {
          el: '.pagination-slider',
          clickable: true,
          dynamicBullets: true,
          // renderBullet: function (index, className) {
          //   return '<span class="' + className + '">' + (index + 1) + '</span>';
          // },
        },
        breakpoints: {
        650: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        1300: {
            slidesPerView: 4,
            spaceBetween: 30
        }
      }
      });
      

      let imgDeSlider = document.querySelector('.imgDeSlider');

      imgDeSlider.addEventListener('click', () => {
        if (!imgDeSlider.classList.contains('ImgSlideModal')) {
          imgDeSlider.classList.remove('ImgSlideModal');

        } else {
          imgDeSlider.classList.remove('ImgSlideModal');
        }
    });




    var $lightbox = $('.lightbox'); // L'élément HTML

    // Ouvrir la lightbox
    $('.sliderA').click(function(e) {
      
        e.preventDefault(); // On empêche le changement de page
        var url = $(this).attr('href'); // On récupère l'URL de l'image dans href
    
        // On applique l'image en fond
        $lightbox.css('background-image', 'url(' + url + ')'); 
        $lightbox.fadeIn(); // Et on fait apparaitre la lightbox
        ;
    });
    
    // Fermer la lightbox
    $lightbox.click(function () {
        $lightbox.fadeOut();
    });