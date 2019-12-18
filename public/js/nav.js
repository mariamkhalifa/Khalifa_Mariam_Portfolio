(function (){

let burger = document.querySelector('.fa-bars'),
    mainNav = document.querySelector('.main-nav'),
    mediaQuery1 = window.matchMedia('(min-width: 1024px)'),
    mediaQuery2 = window.matchMedia('(min-width: 768px)'),
	linkAbout = document.querySelector('#link-about'),
    linkDev = document.querySelector('#link-dev'),
    linkMotion = document.querySelector('#link-motion'),
    linkContact = document.querySelector('#link-contact');
    
if (mediaQuery1.matches) {
    //console.log('hello');
    mainNav.classList.remove('visible');
}

function expandNav() {
    burger.classList.toggle('rotated');
    mainNav.classList.toggle('visible');
}

function scrollToAbout(e){
	e.preventDefault;
	if (mediaQuery1.matches) {
		gsap.to(window, 1, {scrollTo:{y:700}});
	}
	else if (mediaQuery2.matches) {
		gsap.to(window, 1, {scrollTo:{y:850}});
	}
	else {
		gsap.to(window, 1, {scrollTo:{y:900}});
	}
}

function scrollToDevelopment(e){
	e.preventDefault;
	if (mediaQuery1.matches) {
		gsap.to(window, 1, {scrollTo:{y:1400}});
	}
	else if (mediaQuery2.matches) {
		gsap.to(window, 1, {scrollTo:{y:1600}});
	}
	else {
		gsap.to(window, 1, {scrollTo:{y:2200}});
	}
}

function scrollToMotion(e){
	e.preventDefault;
	if (mediaQuery1.matches) {
		gsap.to(window, 1, {scrollTo:{y:2300}});
		console.log("!!");
	}
	else if (mediaQuery2.matches) {
		gsap.to(window, 1, {scrollTo:{y:2800}});
	}
	else {
		gsap.to(window, 1, {scrollTo:{y:3550}});
	}
}

function scrollToContact(e){
	e.preventDefault;
	if (mediaQuery1.matches) {
		gsap.to(window, 1, {scrollTo:{y:4200}});
	}
	else if (mediaQuery2.matches) {
		gsap.to(window, 1, {scrollTo:{y:4200}});
	}
	else {
		gsap.to(window, 1, {scrollTo:{y:5300}});
	}
}

burger.addEventListener('click', expandNav);
linkAbout.addEventListener('click', scrollToAbout);
linkDev.addEventListener('click', scrollToDevelopment);
linkMotion.addEventListener('click', scrollToMotion);
linkContact.addEventListener('click', scrollToContact);

})();
