
(function (){
// console.log('wrokin');
let scrollTop = document.querySelector('.fa-chevron-up');
	
function scrollToTop() {
	gsap.to(window, 1, {scrollTo:{y:0}});
}

scrollTop.addEventListener('click', scrollToTop);

})();