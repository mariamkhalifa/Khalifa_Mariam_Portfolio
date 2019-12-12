(function (){

let aboutImg = document.querySelector('.about-img');

function swapImg() {
    aboutImg.src = "public/images/mariam2.jpg";
}

aboutImg.addEventListener('mouseover', swapImg);

})();