console.log(`over-ons page`);
import lottie from 'lottie-web';

// const ScrollReveal = require(`scrollreveal`);
//
// const scrollReveal = () => {
//   window.sr = ScrollReveal({
//     reset: true,
//     viewFactor: 0.4,
//     mobile: false,
//     // easing: `linear`,
//      easing: `cubic-bezier(0,.7,.1,1)`
//   });
//
//   sr.reveal('.about__logo', {
//     duration: 2000,
//     origin: `bottom`,
//     scale: 0,
//     distance: `5rem`,
//   }, 20);
//
//   sr.reveal('.fadeInPartnerImage', {
//     duration: 1500,
//     origin: `bottom`,
//     scale: 0,
//     distance: `3rem`
//   }, 100);
//
//   sr.reveal('.fadeInPartnerName', {
//     duration: 1500,
//     origin: `bottom`,
//     scale: 0,
//     distance: `3rem`
//   }, 200);
//
//   sr.reveal('.fadeInPartnerFunction', {
//     delay: 200,
//     duration: 1500,
//     origin: `bottom`,
//     scale: 0,
//     // distance: `5rem`,
//   }, 200);
//
//   sr.reveal('.fadeInImage', {
//     delay: 0,
//     duration: 1500,
//     origin: `left`,
//     scale: 0,
//     ease: `linear`,
//     distance: `3rem`,
//   });
// }
//
//



//
// const $opinion = document.querySelector(`.about__opinion__text`);
// const client = document.querySelector(`.about__opinion__client`);
// const lines = document.querySelectorAll(`#line`);
// const parent = document.querySelector(`.about__opinion__linesContainer`);
//
// console.log(lines);
// let position = 0;
// let testimonials = [];
//
// const clickLine = e => {
//   const currentLine = e.currentTarget;
//   console.log(`currentLine`);
//   // $opinion.innerHTML = testimonials[position].opinion;
//   // let index = Array.prototype.indexOf.call(parent.children, e.currentTarget);
//   currentLine.classList.remove(`about__opinion__lines-unselected`);
//   currentLine.classList.add(`about__opinion__lines-selected`);
//   let index = Array.from(parent.children).indexOf(e.currentTarget);
//
//   $opinion.innerHTML = testimonials[index].opinion;
//   client.innerHTML = testimonials[index].name;
//   console.log(index);
//   console.log(lines[0]);
//   if (index === 0) {
//     lines[1].classList.remove(`about__opinion__lines-selected`);
//     lines[1].classList.add(`about__opinion__lines-unselected`);
//     lines[2].classList.remove(`about__opinion__lines-selected`);
//     lines[2].classList.add(`about__opinion__lines-unselected`);
//     lines[3].classList.remove(`about__opinion__lines-selected`);
//     lines[3].classList.add(`about__opinion__lines-unselected`);
//   }
//
//   if (index === 1) {
//     lines[0].classList.remove(`about__opinion__lines-selected`);
//     lines[0].classList.add(`about__opinion__lines-unselected`);
//     lines[2].classList.remove(`about__opinion__lines-selected`);
//     lines[2].classList.add(`about__opinion__lines-unselected`);
//     lines[3].classList.remove(`about__opinion__lines-selected`);
//     lines[3].classList.add(`about__opinion__lines-unselected`);
//   }
//
//   if (index === 2) {
//     lines[0].classList.remove(`about__opinion__lines-selected`);
//     lines[0].classList.add(`about__opinion__lines-unselected`);
//     lines[1].classList.remove(`about__opinion__lines-selected`);
//     lines[1].classList.add(`about__opinion__lines-unselected`);
//     lines[3].classList.remove(`about__opinion__lines-selected`);
//     lines[3].classList.add(`about__opinion__lines-unselected`);
//   }
//
//   if (index === 3) {
//     lines[0].classList.remove(`about__opinion__lines-selected`);
//     lines[0].classList.add(`about__opinion__lines-unselected`);
//     lines[1].classList.remove(`about__opinion__lines-selected`);
//     lines[1].classList.add(`about__opinion__lines-unselected`);
//     lines[2].classList.remove(`about__opinion__lines-selected`);
//     lines[2].classList.add(`about__opinion__lines-unselected`);
//   }
// }
//
//
// lines.forEach(line => {
//   line.addEventListener(`click`, clickLine);
// });
//
// const parse = data => {
//   testimonials = data.testimonials;
//   console.log(testimonials);
// };
//
// // const parse = data => {
// //   const positionTimer = setInterval(() => {
// //     position += 1;
// //     if (position === 4) {
// //       position = 0;
// //     }
// //     // console.log(lines.indexOf(3));
// //
// //     // if (lines.indexOf(3) === 3) {
// //     //   lines[0].classList.remove(`about__opinion__lines-selected`);
// //     //   lines[1].classList.remove(`about__opinion__lines-selected`);
// //     //   ines[2].classList.remove(`about__opinion__lines-selected`);
// //     // }
// //     // for (var i = 0; i < 4; i++) {
// //     //  if
// //     // }
// //     lines[position].classList.remove(`about__opinion__lines-unselected`);
// //     lines[position].classList.add(`about__opinion__lines-selected`);
// //     console.log(position);
// //     const testimonials = data.testimonials;
// //     $opinion.innerHTML = testimonials[position].opinion;
// //     client.innerHTML = testimonials[position].name;
// //   }, 2000);
// // };
//
// const loadTestimonials = () => {
//   fetch(`/localwp.dev/wp-content/themes/test-FoundationPress/src/assets/images/testimonials.json`)
//     .then(result => result.json())
//     .then(result => parse(result));
// };
//
//
// const init = () => {
//   loadTestimonials();
//   // scrollReveal();
// }
//
// init();

// $(document).foundation();
