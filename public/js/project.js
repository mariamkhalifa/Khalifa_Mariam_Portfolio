(function (){

let projectName = document.querySelector('.title'),
    deskTopImgCon = document.querySelector('.dt-img-con'),
    mobileImg = document.querySelector('.m-img'),
    mediaQuery = window.matchMedia('(min-width: 767px)');

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