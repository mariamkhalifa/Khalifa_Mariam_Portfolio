(function (){

let aboutImg = document.querySelector('.about-img');

function swapImg1() {
    aboutImg.src = "public/images/mariam2.jpg";
    gsap.from(aboutImg, {opacity: 0, rotation: 15, scale: 1.2, duration: 1, ease: 'power4'});
    gsap.to(aboutImg, {opacity: 1, rotation: 0, scale: 1, duration: 1, ease: 'power4'});
}

function swapImg2() {
    aboutImg.src = "public/images/mariam1.jpg";
    gsap.from(aboutImg, {opacity: 0, rotation: -15, scale: 1.2, duration: 1, ease: 'power4'});
    gsap.to(aboutImg, {opacity: 1, rotation: 0, scale: 1, duration: 1, ease: 'power4'});
}

aboutImg.addEventListener('mouseover', swapImg1);
aboutImg.addEventListener('mouseleave', swapImg2);

})();