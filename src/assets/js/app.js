import $ from 'jquery';
import whatInput from 'what-input';
const VanillaTilt = require(`vanilla-tilt`);
import lottie from 'lottie-web';
import Velocity from 'velocity-animate';
const ScrollReveal = require(`scrollreveal`);
const Barba = require(`barba.js`);
import {TweenLite, TimelineLite, TweenMax} from "gsap";

window.$ = $;

import Foundation from 'foundation-sites';
import 'owl.carousel';

// if (document.getElementById(`bm`).contains(watch))

lottie.loadAnimation({
  container: document.getElementById(`bm`),
  renderer: `svg`,
  loop: true,
  autoplay: true,
  path: `/localwp.dev/wp-content/themes/test-FoundationPress/src/assets/images/data3.json`
});

const overlay = document.querySelector(`.overlay`);
const overlayLoading = document.querySelector(`.overlay__loading`);
const overlayLoadingAnimation = document.querySelector(`.overlay__loading__animation`);
const imageAnimation = document.querySelector(`.dickytall__image`);
const headerTitle = document.querySelectorAll(`.hallo`);

const overlayAnimation = () => {
  console.log(`geladen`);
//   let introAnim = new TimelineLite();
//   introAnim.staggerFrom(".fadeInScroll", 1.5, {delay: 4, y: -50, opacity: 0, ease: Power4.easeOut}, `.1`)
//   .staggerFrom(".hallo", 1.5, {delay: 8, y: 40, opacity: 1, ease: Power4.easeOut}, `.1`);
 };

if(overlayLoading) {

  console.log(`geladen`);
  let introAnim = new TimelineLite();
  introAnim.staggerFrom(".fadeInScroll", 1.5, {delay: 4, y: -50, opacity: 0, ease: Power4.easeOut})
  .from(`.hallo`, 1, {y: 40, opacity: 0}, 3.5)
  .from(`.hallo1`, 1, {y: 40, opacity: 0}, 3.55)
  .from(`.hallo2`, 1, {y: 40, opacity: 0}, 3.6)
  .from(`.hallo3`, 1, {y: 40, opacity: 0}, 3.65)
  .from(`.hallo4`, 1, {y: 40, opacity: 0}, 3.7)
  .from(`.hallo5`, 1, {y: 40, opacity: 0}, 3.75)
  .from(`.hallo6`, 1, {y: 40, opacity: 0}, 3.8)
  .from(`.hallo7`, 1, {y: 40, opacity: 0}, 3.85)
  .from(`.hallo8`, 1, {y: 40, opacity: 0}, 3.9)
  .from(`.hallo9`, 1, {y: 40, opacity: 0}, 3.95);

  // console.log(`geladen`);
  let overlayAnim = new TimelineLite();
  overlayAnim.to(overlayLoading, 1.5, {delay: .2, yPercent: 51, ease: Power4.easeOut})
  .to(overlayLoading, 1.2, {yPercent: 100})
  .to(overlayLoading, .3, {xPercent: 100, ease: Power4.easeOut})
  .to(overlayLoading, .3, {xPercent: 200}, `start`)
  .to(overlayLoadingAnimation, 1.2, {xPercent: 100, ease: Power4.easeOut},`start`);
}




// .staggerFrom(".hallo", 1.5, {delay: 8, y: 40, opacity: 1, ease: Power4.easeOut}, `.1`, 0);
// window.addEventListener(`load`, overlayAnimation);

// const links = document.querySelectorAll('a[href]');
//
// const preventClick = function(e) {
//   console.log(`hey link activated`);
//  if(e.currentTarget.href === window.location.href) {
//    console.log(`prevent default link`);
//    e.preventDefault();
//    e.stopPropagation();
//  }
// };
//
// for(let i = 0; i < links.length; i++) {
//   links[i].addEventListener('click', preventClick);
// }

//
const overons__overlay = document.querySelector(`.overons__overlay`);
const overons__overlay2 = document.querySelector(`.overons__overlay2`);
console.log(overons__overlay);

Barba.Pjax.init();
Barba.Prefetch.init();

window.addEventListener(`load`, () => {

  const FadeTransition = Barba.BaseTransition.extend({
    start: function() {

      Promise
        .all([this.newContainerLoading, this.fadeOut()])
        .then(this.showNewPage.bind(this));
    },

    fadeOut: function() {
      const deferred = Barba.Utils.deferred();

      TweenMax.set(document.body,{'-webkit-filter':'blur(0px)'});

      // TweenMax.to({}, .4, {
      //  onUpdate: function(tl){
      //       // convert timeline progress to a percentage
      //       var tlp = (tl.progress()*10) >> 0;
      //       // set brightness value on each update
      //       TweenMax.set(document.body,{
      //            '-webkit-filter': 'brightness(' + tlp + 'px)'
      //       });
      //  },
      //  onUpdateParams: ["{self}"]
      //   });
      //
      //  let overlaySlide = new TimelineLite();
      //  overlaySlide.to(`.projects__overlay`, 1.5, {delay: .3, opacity: 1,
      //  onComplete: function() {
      //    deferred.resolve();
      //  }});

      let overlaySlide = new TimelineLite();
      overlaySlide.set(overons__overlay, {xPercent: -100})
      .to(overons__overlay, 1.5, {xPercent: 100, ease: Expo.easeOut});

      let overlaySlide2 = new TimelineLite();
      overlaySlide2.set(overons__overlay2, {xPercent: -100})
      .to(overons__overlay2, 1.2, {delay: .3, xPercent: 100, ease: Expo.easeOut, onComplete: function() {
        deferred.resolve();
      }});



      return deferred.promise;
    },


    showNewPage: function() {

      // TweenMax.to({}, .4, {
      //  onUpdate: function(tl){
      //       // convert timeline progress to a percentage
      //       var tlp = (tl.progress()*-1) >> 0;
      //       // set brightness value on each update
      //       TweenMax.set(document.body,{
      //            '-webkit-filter': 'blur(' + tlp + 'px)'
      //       });
      //  },
      //  onUpdateParams: ["{self}"],
      //  });
      //
      //  let overlaySlide = new TimelineLite();
      //  overlaySlide.to(`.projects__overlay`, 1.5, {delay: .4, opacity: 1});

      $(window).scrollTop(0);

      let test = new TimelineLite();
      test.set(overons__overlay, {xPercent: 100})
      .to(overons__overlay, 1.2, {delay: .3, xPercent: 200, ease: Expo.easeOut});

      let test2 = new TimelineLite();
      test2.set(overons__overlay2, {xPercent: 100})
      .to(overons__overlay2, 1.2, {xPercent: 200, ease: Expo.easeOut});

      // let tl = new TimelineLite();
      //   tl.set(this.newContainer, {xPercent: -20})
      //   .to(this.newContainer, 1.5, {xPercent: 0, ease: Expo.easeOut});// move it to the desired position

      // this.done();

      // if (Barba.HistoryManager.prevStatus().namespace === 'DetailPage') {
      //   $(window).scrollTop(0);
      //
      //   let test = new TimelineLite();
      //   test.set(overons__overlay, {xPercent: 100})
      //   .to(overons__overlay, 1.2, {delay: .3, xPercent: 200, ease: Expo.easeOut});
      //
      //   let test2 = new TimelineLite();
      //   test2.set(overons__overlay2, {xPercent: 100})
      //   .to(overons__overlay2, 1.2, {xPercent: 200, ease: Expo.easeOut});
      //
      // } else {
      //
      //   $(window).scrollTop(0);
      //
      //   let test = new TimelineLite();
      //   test.set(overons__overlay, {xPercent: 100})
      //   .to(overons__overlay, 1.2, {delay: .3, xPercent: 200, ease: Expo.easeOut});
      //
      //   let test2 = new TimelineLite();
      //   test2.set(overons__overlay2, {xPercent: 100})
      //   .to(overons__overlay2, 1.2, {xPercent: 200, ease: Expo.easeOut});
      //
      //   let fadein = new TimelineLite();
      //   fadein.to(`.projects__title`, 2.2, {delay: 2, opacity: 0});
      //
      // }
      //



      this.done();
    }
  });

  Barba.Pjax.getTransition = function() {
    return FadeTransition;
  };

  const OveronsPage = Barba.BaseView.extend({
    namespace: `overons`,
    onEnter: function() {

      // ------------------------------------------ Contact ---------------------------------

      const about = document.querySelector(`.about__image`);

      VanillaTilt.init(about);
      let x = window.matchMedia(`(max-width: 640px)`);

      const destroyTilt = () => {

        if (x.matches) {
          console.log(`hello`);
          imageAnimation.vanillaTilt.destroy();
        }
        else {
          VanillaTilt.init(imageAnimation);
        }
      }

      // ------------------------------------disable double click on links ------------------

      // const links = document.querySelectorAll('a[href]');
      //
      // const preventClick = function(e) {
      //   console.log(`hey link activated`);
      //  if(e.currentTarget.href === window.location.href) {
      //    console.log(`prevent default link`);
      //    e.preventDefault();
      //    e.stopPropagation();
      //  }
      // };
      //
      // for(let i = 0; i < links.length; i++) {
      //   links[i].addEventListener('click', preventClick);
      // }


      const $opinion = document.querySelector(`.about__opinion__text`);
      const client = document.querySelector(`.about__opinion__client`);
      const lines = document.querySelectorAll(`#line`);
      const parent = document.querySelector(`.about__opinion__linesContainer`);

      let position = 0;
      let testimonials = [];

      const scrollReveal = () => {
        window.sr = ScrollReveal({
          reset: false,
          viewFactor: 0.4,
          mobile: false,
          easing: `cubic-bezier(.5,0,.2,1)`
        });

        sr.reveal('.fadeInIntro', {
          duration: 1000,
          rotate: { x: 10, y: 50, z: 0 },
          scale: 0,
        }, 20);

        sr.reveal('.fadeInDienst', {
          duration: 1000,
          rotate: { x: 10, y: 50, z: 0 },
          scale: 0,
        }, 20);

        sr.reveal('.about__hello__text', {
          duration: 1500,
          delay: 200,
          origin: `bottom`,
          scale: 0,
          distance: `3rem`
         });

        sr.reveal('.about__hello__detailText', {
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          distance: `3rem`
        }, 200);

        sr.reveal('.fadeInPartnerImage', {
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          distance: `3rem`
        }, 200);

        sr.reveal('.fadeInPartnerName', {
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          distance: `3rem`
        }, 200);

        sr.reveal('.fadeInPartnerFunction', {
          delay: 100,
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          distance: `3rem`
        }, 200);

        sr.reveal('.about__logo', {
          duration: 2000,
          origin: `bottom`,
          scale: 0,
          distance: `5rem`,
        }, 20);
      }

      const clickLine = e => {
        const currentLine = e.currentTarget;
        currentLine.classList.remove(`about__opinion__lines-unselected`);
        currentLine.classList.add(`about__opinion__lines-selected`);
        let index = Array.from(parent.children).indexOf(e.currentTarget);

        $opinion.innerHTML = testimonials[index].opinion;
        // $opinion.classList.add(`testanimation`);
        let lineanim = new TimelineLite();
        lineanim.from(client, 1.2, {x: 30, opacity: 0, ease: Power4.easeOut})
        .from($opinion, 1.2, {x: 30, opacity: 0, ease: Power4.easeOut}, `.1`);

        // if(!lineanim.isActive()) {
        //   lineanim.from(client, 1.2, {x: 30, opacity: 0, ease: Power4.easeOut})
        //   .from($opinion, 1.2, {x: 30, opacity: 0, ease: Power4.easeOut}, `.1`);
        // }


        client.innerHTML = testimonials[index].name;
        if (index === 0) {
          lines[1].classList.remove(`about__opinion__lines-selected`);
          lines[1].classList.add(`about__opinion__lines-unselected`);
          lines[2].classList.remove(`about__opinion__lines-selected`);
          lines[2].classList.add(`about__opinion__lines-unselected`);
          lines[3].classList.remove(`about__opinion__lines-selected`);
          lines[3].classList.add(`about__opinion__lines-unselected`);
        }

        if (index === 1) {
          lines[0].classList.remove(`about__opinion__lines-selected`);
          lines[0].classList.add(`about__opinion__lines-unselected`);
          lines[2].classList.remove(`about__opinion__lines-selected`);
          lines[2].classList.add(`about__opinion__lines-unselected`);
          lines[3].classList.remove(`about__opinion__lines-selected`);
          lines[3].classList.add(`about__opinion__lines-unselected`);
        }

        if (index === 2) {
          lines[0].classList.remove(`about__opinion__lines-selected`);
          lines[0].classList.add(`about__opinion__lines-unselected`);
          lines[1].classList.remove(`about__opinion__lines-selected`);
          lines[1].classList.add(`about__opinion__lines-unselected`);
          lines[3].classList.remove(`about__opinion__lines-selected`);
          lines[3].classList.add(`about__opinion__lines-unselected`);
        }

        if (index === 3) {
          lines[0].classList.remove(`about__opinion__lines-selected`);
          lines[0].classList.add(`about__opinion__lines-unselected`);
          lines[1].classList.remove(`about__opinion__lines-selected`);
          lines[1].classList.add(`about__opinion__lines-unselected`);
          lines[2].classList.remove(`about__opinion__lines-selected`);
          lines[2].classList.add(`about__opinion__lines-unselected`);
        }
      }


      lines.forEach(line => {
        line.addEventListener(`click`, clickLine);
      });

      const parse = data => {
        testimonials = data.testimonials;
        console.log(data);
      };

      const loadTestimonials = () => {
        fetch(`/localwp.dev/wp-content/themes/test-FoundationPress/src/assets/images/testimonials.json`)
          .then(result => result.json())
          .then(result => parse(result));
      };

      const init = () => {
        loadTestimonials();
        scrollReveal();
        destroyTilt(x);
        x.addListener(destroyTilt);
      }

      init();

    },
    onEnterCompleted: function() {
        // The Transition has just finished.

    },
    onLeave: function() {

    },
    onLeaveCompleted: function() {
        // The Container has just been removed from the DOM.
      // document.body.classList.remove(`animation`);
    }
  });



  const Homepage = Barba.BaseView.extend({
    namespace: `homepage`,
    onEnter: function() {

      // ------------------------------------------ Contact ---------------------------------


      // const contactLink2 = document.querySelector(`.nav__item__contact`);
      // console.log(contactLink2);
      // const contact = document.querySelector(`.contact`);
      // const arrowBackAreas = document.querySelectorAll(`.contact__back`);
      // const arrowBack = document.querySelector(`.contact__back__arrow`);
      // const barbaContainer = document.querySelector(`.barba-container`);
      // const contactForm = document.querySelector(`.contact__form`);
      // const makeContact = document.querySelector(`.makeContact`);
      // const address = document.querySelector(`.address`);
      //
      // let contactAnim = new TimelineLite();
      // contactAnim.to(`.contact`, 1, {xPercent: -100, ease: Power4.easeInOut}, 0)
      // .to(`.barbaContainer`, 1, {left: `-100`, ease: Power4.easeInOut}, 0)
      // .staggerFrom(`.contact__social__slidein`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, `.1`, .7)
      // .staggerFrom(`.contact__connect__slidein`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, `.1`, .9)
      // .from(`.contact__form`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, .8);
      // contactAnim.pause();
      //
      // const openContact = () => {
      //   console.log(`open contact`);
      //   contactAnim.restart();
      //   document.body.classList.add(`noscroll`);
      // }
      //
      // const backToHome = () => {
      //   console.log(`close contact`);
      //   contactAnim.reverse();
      //   document.body.classList.remove(`noscroll`);
      // };
      //
      // const arrowBackAnimation = () => {
      //   console.log(`hover`);
      //   arrowBack.style.transform = `translateX(-.8rem)`;
      // };
      //
      // const arrowBackAnimation2 = () => {
      //   console.log(`hover2`);
      //   arrowBack.style.transform = `translateX(0)`;
      // };
      //
      // arrowBackAreas.forEach( arrowBackArea => {
      //   arrowBackArea.addEventListener(`click`, backToHome);
      //   arrowBackArea.addEventListener(`mouseleave`, arrowBackAnimation2);
      //   arrowBackArea.addEventListener(`mouseenter`, arrowBackAnimation);
      // });
      // contactLink2.addEventListener(`click`, openContact);

      const projects = document.querySelectorAll(`.project__overlay`);
      const dickytall = document.querySelector(`.dickytall`);
      const imageAnimation = document.querySelector(`.dickytall__image`);

      console.log(projects);

      const mouseHandler = e => {
        const element = e.currentTarget;
        // element.style.opacity = 1;
        Velocity(element, {
          opacity: 1,
          easing: [0,.7,.1,1]
        }, {
          duration: 300,
          delay: 0,
          loop: false,
        });

        console.log(element);
      };

      const mouseLeave = e => {
        const element = e.currentTarget;
        // element.style.opacity = 0;
        Velocity(element, {
          opacity: 0,
          easing: [0,.7,.1,1]
        }, {
          duration: 300,
          delay: 0,
          loop: false,
        });
        console.log(element);
      };

      projects.forEach( overlay => {
        overlay.addEventListener(`mouseenter`, mouseHandler)
      });

      projects.forEach( overlay => {
        overlay.addEventListener(`mouseleave`, mouseLeave)
      });


      const scrollReveal = () => {
        window.sr = ScrollReveal({
          reset: false,
          viewFactor: 0.4,
          mobile: false,
          easing: `cubic-bezier(.5,0,.2,1)`
        });

        sr.reveal('.project1fadeIn', {
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          distance: `3rem`
        });

        // sr.reveal('.project2fadeIn', {
        //   duration: 1500,
        //   origin: `bottom`,
        //   scale: 0,
        //   distance: `3rem`
        // });
        //
        // sr.reveal('.project3fadeIn', {
        //   duration: 1500,
        //   origin: `bottom`,
        //   scale: 0,
        //   distance: `3rem`
        // });
        //
        // sr.reveal('.project4fadeIn', {
        //   duration: 1500,
        //   origin: `bottom`,
        //   scale: 0,
        //   distance: `3rem`
        // });

        sr.reveal('.fadeInDiensten1', {
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          // distance: `5rem`,
        });

        sr.reveal('.fadeInDiensten2', {
          delay: 100,
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          // distance: `5rem`,
        });

        sr.reveal('.fadeInDiensten3', {
          delay: 200,
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          // distance: `5rem`,
        });

        sr.reveal('.fadeInDiensten4', {
          delay: 300,
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          // distance: `5rem`,
        });

        sr.reveal('.fadeInDickytallInfo1', {
          // rotate: { x: 30, y: 30, z: 0 },
          delay: 0,
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          // distance: `5rem`,
        });

        sr.reveal('.fadeInDickytallInfo2', {
          delay: 0,
          duration: 1500,
          origin: `bottom`,
          scale: 0,
          // distance: `5rem`,
        });

        sr.reveal('.fadeInSociaal', {
          delay: 0,
          duration: 1500,
          origin: `right`,
          scale: 0,
          // distance: `5rem`,
        });

        sr.reveal('.fadeInContact', {
          delay: 0,
          duration: 1500,
          origin: `left`,
          scale: 0,
          // distance: `5rem`,
        });
      };

      VanillaTilt.init(imageAnimation);
      let x = window.matchMedia(`(max-width: 640px)`);

      const destroyTilt = () => {

        if (x.matches) {
          console.log(`hello`);
          imageAnimation.vanillaTilt.destroy();
        }
        else {
          VanillaTilt.init(imageAnimation);
        }
      }

      const init = () => {
        scrollReveal();
        destroyTilt(x);
        x.addListener(destroyTilt);
      }

      init();
    },
    onEnterCompleted: function() {
        // The Transition has just finished.
    },
    onLeave: function() {
      document.body.classList.add(`animation2`);
    },
    onLeaveCompleted: function() {
        // The Container has just been removed from the DOM.
    }
  });

  const DetailPage = Barba.BaseView.extend({
    namespace: `projectDetail`,
    onEnter: function() {

      const buttonLeft = document.querySelector(`.previous`);
      const buttonRight = document.querySelector(`.next2`);
      console.log(buttonLeft);
      console.log(buttonRight);
      var slideIndex = 1;

      const showDivs = n => {
        let i;
        const x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1};
        if (n < 1) {slideIndex = x.length};
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        };
        x[slideIndex-1].style.display = "block";
      };

      showDivs(slideIndex);

      const goBack = () => {
        console.log(`prev`);
        slideIndex -= 1;
        showDivs(slideIndex);
      };

      const goNext = () => {
        console.log(`next`);
        slideIndex += 1;
        showDivs(slideIndex);
      };

      buttonLeft.addEventListener(`click`, goBack);
      buttonRight.addEventListener(`click`, goNext);


      const scrollReveal = () => {
        // window.sr = ScrollReveal({
        //   reset: false,
        //   viewFactor: 0.4,
        //   mobile: false,
        //   easing: `cubic-bezier(.5,0,.2,1)`
        // });
        //
        // sr.reveal('.fadeInNeed', {
        //   duration: 1400,
        //   rotate: { x: 10, y: 50, z: 0 },
        //   scale: 0,
        // }, 50);
        //
        // sr.reveal('.fadeInNeedInfo', {
        //   delay: 400,
        //   duration: 1400,
        //   origin: `bottom`,
        //   scale: 0,
        //   distance: `3rem`
        // });
        //
        // sr.reveal('.fadeInSolution', {
        //   duration: 1400,
        //   rotate: { x: 10, y: 50, z: 0 },
        //   scale: 0,
        // }, 50);
        //
        // sr.reveal('.fadeInSolutionInfo', {
        //   delay: 400,
        //   duration: 1400,
        //   origin: `bottom`,
        //   scale: 0,
        //   distance: `3rem`
        // });
        //
        // sr.reveal('.fadeInHow', {
        //   duration: 1500,
        //   origin: `bottom`,
        //   scale: 0
        // }, 100);

      }

      const slider = () => {

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: false,
            stagePadding: 50,
            autoWidth: true,
            dots: false,
            autoplay: false,
            autoplaySpeed: 1000,
            navText: ["<img src='/localwp.dev/wp-content/themes/test-FoundationPress/src/assets/images/prev.svg'>","<img src='/localwp.dev/wp-content/themes/test-FoundationPress/src/assets/images/next.svg'>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1400:{
                    items:5
                }
            }
        });

      }

      const init = () => {
        slider();
        scrollReveal();
      }

      init();
    },
    onEnterCompleted: function() {
        // The Transition has just finished.
    },
    onLeave: function() {
      document.body.classList.add(`animation2`);
    },
    onLeaveCompleted: function() {
        // The Container has just been removed from the DOM.
    }
  });

  const ProjectsPage = Barba.BaseView.extend({
    namespace: `projects`,
    onEnter: function() {


      // ------------------------------------------ Contact ---------------------------------

      //
      // const contactLink = document.querySelector(`.nav__item__contact`);
      // const contact = document.querySelector(`.contact`);
      // const arrowBackAreas = document.querySelectorAll(`.contact__back`);
      // const arrowBack = document.querySelector(`.contact__back__arrow`);
      // const barbaContainer = document.querySelector(`.barba-container`);
      // const contactForm = document.querySelector(`.contact__form`);
      // const makeContact = document.querySelector(`.makeContact`);
      // const address = document.querySelector(`.address`);
      //
      // let contactAnim = new TimelineLite();
      // contactAnim.to(`.contact`, 1, {left: 0, ease: Power4.easeInOut}, 0)
      // .to(`.barbaContainer`, 1, {left: `-100`, ease: Power4.easeInOut}, 0)
      // .staggerFrom(`.contact__social__slidein`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, `.1`, .7)
      // .staggerFrom(`.contact__connect__slidein`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, `.1`, .9)
      // .from(`.contact__form`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, .8);
      // contactAnim.pause();
      //
      // const openContact = () => {
      //   contactAnim.restart();
      //   document.body.classList.add(`noscroll`);
      // }
      //
      // contactLink.addEventListener(`click`, openContact);
      //
      // const backToHome = () => {
      //   contactAnim.reverse();
      //   // contact.classList.remove(`goToContact`);
      //   // contact.classList.add(`goToHome`);
      //   document.body.classList.remove(`noscroll`);
      //   // barbaContainer.classList.remove(`move`);
      //   // barbaContainer.classList.add(`moveBack`);
      // };
      //
      // const arrowBackAnimation = () => {
      //   console.log(`hover`);
      //   arrowBack.style.transform = `translateX(-.8rem)`;
      // };
      //
      // const arrowBackAnimation2 = () => {
      //   console.log(`hover2`);
      //   arrowBack.style.transform = `translateX(0)`;
      // };
      //
      // arrowBackAreas.forEach( arrowBackArea => {
      //   arrowBackArea.addEventListener(`click`, backToHome);
      //   arrowBackArea.addEventListener(`mouseleave`, arrowBackAnimation2);
      //   arrowBackArea.addEventListener(`mouseenter`, arrowBackAnimation);
      // });

      const projects = document.querySelectorAll(`.project__overlay`);
      const dickytall = document.querySelector(`.dickytall`);
      const imageAnimation = document.querySelector(`.dickytall__image`);

      console.log(projects);

      const mouseHandler = e => {
        const element = e.currentTarget;
        // element.style.opacity = 1;
        Velocity(element, {
          opacity: 1,
          easing: [0,.7,.1,1]
        }, {
          duration: 300,
          delay: 0,
          loop: false,
        });

        console.log(element);
      };

      const mouseLeave = e => {
        const element = e.currentTarget;
        // element.style.opacity = 0;
        Velocity(element, {
          opacity: 0,
          easing: [0,.7,.1,1]
        }, {
          duration: 300,
          delay: 0,
          loop: false,
        });
        console.log(element);
      };

      projects.forEach( overlay => {
        overlay.addEventListener(`mouseenter`, mouseHandler)
      });

      projects.forEach( overlay => {
        overlay.addEventListener(`mouseleave`, mouseLeave)
      });


      const init = () => {
      }

      init();
    },
    onEnterCompleted: function() {
        // The Transition has just finished.
    },
    onLeave: function() {
      document.body.classList.add(`animation2`);
    },
    onLeaveCompleted: function() {
        // The Container has just been removed from the DOM.
    }
  });

  Homepage.init();
  OveronsPage.init();
  DetailPage.init();
  ProjectsPage.init();
  Barba.Pjax.start();

});



const select = document.querySelector(`.contact__select__trigger`);
const options = document.querySelector(`.contact__select__options`);
// const body = document.querySelector(`body`);

const option = document.querySelectorAll(`.contact__select__options-style`);

var optionsOpen

const pickOption = e => {
  const element = e.currentTarget;
  console.log(element.innerHTML);
  select.innerHTML = element.innerHTML;
  options.classList.remove(`openOptions`);

};

option.forEach(option => {
  option.addEventListener(`click`, pickOption);
});

const clickSelect = () => {
  options.classList.add(`openOptions`);
};
//
// const closeOptions = () => {
//   options.style.opacity = `0`;
//   options.style.top = `3.5rem`;
// };
//
// body.addEventListener(`click`, closeOptions);

select.addEventListener(`click`, clickSelect);

// -------------- NAV OVERLAY ---------

const openMobileNav = document.querySelector(`.navMobile__item__open`);
const menuOverlay = document.querySelector(`.menu__overlay`);
const closeMobileNav = document.querySelector(`.menu__overlay__close`);
const menuOverlayItems = document.querySelectorAll(`.menu__overlay__item`);
let mobileNavAnim = new TimelineLite();
mobileNavAnim.to(menuOverlay, .4, {opacity: 1})
.staggerFrom(".menu__overlay__item", .8, {x: 50, opacity: 0, ease: Power4.easeOut, clearProps:`opacity`}, `.1`, `-.1`);
mobileNavAnim.pause();


const openNav = () => {
  mobileNavAnim.play();
  console.log(`open`);
  menuOverlay.style.pointerEvents = `auto`;
  document.body.classList.add(`noscroll`);
}

const backToHomeNav = () => {
  mobileNavAnim.reverse();
  console.log(`close`);
  menuOverlay.style.pointerEvents = `none`;
  document.body.classList.remove(`noscroll`);
};

openMobileNav.addEventListener(`click`, openNav);
closeMobileNav.addEventListener(`click`, backToHomeNav);

//----

const contactLink = document.querySelector(`.nav__item__contact`);
const contact = document.querySelector(`.contact`);
const arrowBackAreas = document.querySelectorAll(`.contact__back`);
const arrowBack = document.querySelector(`.contact__back__arrow`);
const barbaContainer = document.querySelector(`.barba-container`);
const contactForm = document.querySelector(`.contact__form`);
const makeContact = document.querySelector(`.makeContact`);
const address = document.querySelector(`.address`);

let contactAnim = new TimelineLite();
contactAnim.to(`.contact`, 1, {xPercent: -100, ease: Power4.easeInOut}, 0)
.to(`.barbaContainer`, 1, {left: `-100`, ease: Power4.easeInOut}, 0)
.staggerFrom(`.contact__social__slidein`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, `.1`, .7)
.staggerFrom(`.contact__connect__slidein`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, `.1`, .9)
.from(`.contact__form`, .8, {y: 50, opacity: 0, ease: Power4.easeOut}, .8);
contactAnim.pause();

const openContact = () => {
  contactAnim.restart();
  document.body.classList.add(`noscroll`);
}

contactLink.addEventListener(`click`, openContact);

const backToHome = () => {
  contactAnim.reverse();
  // contact.classList.remove(`goToContact`);
  // contact.classList.add(`goToHome`);
  document.body.classList.remove(`noscroll`);
  // barbaContainer.classList.remove(`move`);
  // barbaContainer.classList.add(`moveBack`);
};

const arrowBackAnimation = () => {
  console.log(`hover`);
  arrowBack.style.transform = `translateX(-.8rem)`;
};

const arrowBackAnimation2 = () => {
  console.log(`hover2`);
  arrowBack.style.transform = `translateX(0)`;
};

arrowBackAreas.forEach( arrowBackArea => {
  arrowBackArea.addEventListener(`click`, backToHome);
  arrowBackArea.addEventListener(`mouseleave`, arrowBackAnimation2);
  arrowBackArea.addEventListener(`mouseenter`, arrowBackAnimation);
});


// const buttonLeft = document.querySelector(`.previous`);
// const buttonRight = document.querySelector(`.next2`);
// console.log(buttonLeft);
// console.log(buttonRight);
// var slideIndex = 1;
//
// const showDivs = n => {
// let i;
// const x = document.getElementsByClassName("mySlides");
// if (n > x.length) {slideIndex = 1};
// if (n < 1) {slideIndex = x.length};
// for (i = 0; i < x.length; i++) {
// x[i].style.display = "none";
// };
// x[slideIndex-1].style.display = "block";
// };
//
// showDivs(slideIndex);
//
// const goBack = () => {
// console.log(`prev`);
// slideIndex -= 1;
// showDivs(slideIndex);
// };
//
// const goNext = () => {
// console.log(`next`);
// slideIndex += 1;
// showDivs(slideIndex);
// };
//
// buttonLeft.addEventListener(`click`, goBack);
// buttonRight.addEventListener(`click`, goNext);
