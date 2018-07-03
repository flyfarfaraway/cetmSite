$(document).ready(function () {
    //init slide
    initSwiper();
    slickOnMobile('#activeItem');
    slickOnMobile('#benefitSlide');
    initHoverFunction();
});
function initSwiper() {
    // Params
    if ($('.swiper-container').length < 1) {
        return
    }
    let mainSliderSelector = '.main-slider',
        navSliderSelector = '.nav-slider',
        interleaveOffset = 0.5;

    // Main Slider
    let mainSliderOptions = {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 5000
        },
        loopAdditionalSlides: 10,
        grabCursor: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            init: function () {
                this.autoplay.stop();
            },
            imagesReady: function () {
                this.el.classList.remove('loading');
                this.autoplay.start();
            },
            slideChangeTransitionEnd: function () {
                let swiper = this,
                    captions = swiper.el.querySelectorAll('.caption');
                for (let i = 0; i < captions.length; ++i) {
                    captions[i].classList.remove('show');
                }
                swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
            },
            progress: function () {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                    let slideProgress = swiper.slides[i].progress,
                        innerOffset = swiper.width * interleaveOffset,
                        innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-bgimg").style.transform =
                      "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },
            touchStart: function () {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function (speed) {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-bgimg").style.transition =
                      speed + "ms";
                }
            }
        }
    };
    let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

    // Navigation Slider
    let navSliderOptions = {
        loop: true,
        loopAdditionalSlides: 10,
        speed: 1000,
        spaceBetween: 25,
        slidesPerView: 5,
        centeredSlides: true,
        touchRatio: 0.2,
        slideToClickedSlide: true,
        direction: 'vertical',
        on: {
            imagesReady: function () {
                this.el.classList.remove('loading');
            },
            click: function () {
                mainSlider.autoplay.stop();
            }
        }
    };
    let navSlider = new Swiper(navSliderSelector, navSliderOptions);

    // Matching sliders
    mainSlider.controller.control = navSlider;
    navSlider.controller.control = mainSlider;
}
function slickOnMobile(element) {
    $(element).slick({
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
            },
          {
              breakpoint: 768,
              settings: {
                  arrows: true,
                  centerPadding: '0px',
                  slidesToShow: 1
              }
          },
        ]
    });
}
function initHoverFunction() {
    $("#activeItem .item").hover(
          function () {
              $('.item').removeClass('active');
              $(this).addClass('active');
          }, function () {
              $(this).removeClass('active');
          }
    );
}