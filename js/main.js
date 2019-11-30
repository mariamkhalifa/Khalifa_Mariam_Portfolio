(function (){
// console.log('wrokin');
let burger = document.querySelector('.fa-bars'),
    mainNav = document.querySelector('.main-nav');

function expandNav() {
    burger.classList.toggle('rotated');
    mainNav.classList.toggle('visible');
}

burger.addEventListener('click', expandNav);

})();