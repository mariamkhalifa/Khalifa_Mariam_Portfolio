(function (){

let aboutImg = document.querySelector('.about-img');

function swapImg1() {
    aboutImg.src = "images/mariam2.jpg";
    gsap.from(aboutImg, {opacity: .5, duration: 1, ease: 'power4'});
    gsap.to(aboutImg, {opacity: 1, duration: 1, ease: 'power4'});
    aboutImg.style.filter = "grayscale(1)";
}

function swapImg2() {
    aboutImg.src = "images/mariam1.jpg";
    gsap.from(aboutImg, {opacity: .5, duration: 1, ease: 'power4'});
    gsap.to(aboutImg, {opacity: 1, duration: 1, ease: 'power4'});
    aboutImg.style.filter = "grayscale(0)";
}

aboutImg.addEventListener('mouseover', swapImg1);
aboutImg.addEventListener('mouseleave', swapImg2);

})();