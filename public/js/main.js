(function (){
import 'modules/project.js'; 
// console.log('wrokin');
let burger = document.querySelector('.fa-bars'),
    mainNav = document.querySelector('.main-nav'),
    mediaQuery1 = window.matchMedia('(min-width: 1024px)'),
    mediaQuery2 = window.matchMedia('(min-width: 768px)'),
    linkDev = document.querySelector('#link-dev');

if (mediaQuery1.matches) {
    //console.log('helloe');
    mainNav.classList.remove('visible');
}

function expandNav() {
    burger.classList.toggle('rotated');
    mainNav.classList.toggle('visible');
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
		TweenLite.to(window, 1, {scrollTo:{y:700}})
	}
}


burger.addEventListener('click', expandNav);
linkDev.addEventListener('click', scrollToDevelopment);

})();