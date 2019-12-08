//import './modules/project.js'; 

(function (){
// console.log('wrokin');
let burger = document.querySelector('.fa-bars'),
    mainNav = document.querySelector('.main-nav'),
    mediaQuery1 = window.matchMedia('(min-width: 1024px)'),
    mediaQuery2 = window.matchMedia('(min-width: 768px)'),
	linkAbout = document.querySelector('#link-about'),
	linkDev = document.querySelector('#link-dev'),
	linkContact = document.querySelector('#link-contact'),
	//linkMotion = document.querySelector('#link-motion'),
	aboutImg = document.querySelector('.about-img'),
	scrollTop = document.querySelector('.fa-chevron-up'),
	projectName = document.querySelector('.title'),
    deskTopImgCon = document.querySelector('.dt-img-con'),
    mobileImg = document.querySelector('.m-img'),
    mediaQuery = window.matchMedia('(min-width: 767px)');

if (mediaQuery1.matches) {
    //console.log('hello');
    mainNav.classList.remove('visible');
}

let waypoint1 = new Waypoint({
	element: document.getElementById('about'),
	handler: function(direction) {
		console.log('Scrolled to waypoint!');
		//TweenLite.to(window, 1 {fade})
		// this.element.innerHTML += "<p>I got added with Waypoint!</p>";
	}
});


function expandNav() {
    burger.classList.toggle('rotated');
    mainNav.classList.toggle('visible');
}

function scrollToAbout(e){
	e.preventDefault;
	if (mediaQuery1.matches) {
		TweenLite.to(window, 1, {scrollTo:{y:700}});
	}
	else if (mediaQuery2.matches) {
		TweenLite.to(window, 1, {scrollTo:{y:650}});
	}
	else {
		TweenLite.to(window, 1, {scrollTo:{y:700}});
	}
}

function scrollToDevelopment(e){
	e.preventDefault;
	if (mediaQuery1.matches) {
		TweenLite.to(window, 1, {scrollTo:{y:700}});
	}
	else if (mediaQuery2.matches) {
		TweenLite.to(window, 1, {scrollTo:{y:650}});
	}
	else {
		TweenLite.to(window, 1, {scrollTo:{y:700}});
	}
}

//function scrollToMotion(e){
	//e.preventDefault;
	//if (mediaQuery1.matches) {
		//TweenLite.to(window, 1, {scrollTo:{y:700}});
	//}
	//else if (mediaQuery2.matches) {
		//TweenLite.to(window, 1, {scrollTo:{y:650}});
	//}
	//else {
		//TweenLite.to(window, 1, {scrollTo:{y:700}});
	//}
//}

function scrollToContact(e){
	e.preventDefault;
	if (mediaQuery1.matches) {
		TweenLite.to(window, 1, {scrollTo:{y:700}});
	}
	else if (mediaQuery2.matches) {
		TweenLite.to(window, 1, {scrollTo:{y:650}});
	}
	else {
		TweenLite.to(window, 1, {scrollTo:{y:700}});
	}
}

function swapImg() {
		aboutImg.src = "public/images/mariam2.jpg";
}

function scrollToTop() {
	TweenLite.to(window, 1, {scrollTo:{y:0}});
}


burger.addEventListener('click', expandNav);
linkAbout.addEventListener('click', scrollToAbout);
linkDev.addEventListener('click', scrollToDevelopment);
//linkMotion.addEventListener('click', scrollToMotion);
linkContact.addEventListener('click', scrollToContact);
aboutImg.addEventListener('mouseover', swapImg);
scrollTop.addEventListener('click', scrollToTop);



if (mediaQuery.matches && projectName.textContent == 'Animal Tracks') {
    mobileImg.style.display = 'block !important'; 
    console.log('!!!');
}

if (projectName.textContent == 'Animal Tracks') {
    deskTopImgCon.style.height = 'auto';
    deskTopImgCon.style.overflowY = 'auto';
    mobileImg.style.display = 'none';
}

if (projectName.textContent == 'Favourite Things') {
    deskTopImgCon.style.height = 'auto';
}

})();