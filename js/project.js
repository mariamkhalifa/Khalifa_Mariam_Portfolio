(function (){

let projectName = document.querySelector('.title'),
    deskTopImgCon = document.querySelector('.dt-img-con'),
    mobileImg = document.querySelector('.m-img'),
    projects = document.querySelectorAll('.project'),
    devLightbox = document.querySelector('.dev-lightbox'),
    closeBtn = document.querySelector('.close-dev-lightbox'),
    mediaQuery = window.matchMedia('(min-width: 767px)');

if (mediaQuery.matches && projectName.textContent == 'Animal Tracks') {
    mobileImg.style.display = 'block !important'; 
    //console.log('!!!');
}

if (projectName.textContent == 'Animal Tracks') {
    deskTopImgCon.style.height = 'auto';
    deskTopImgCon.style.overflowY = 'auto';
    mobileImg.style.display = 'none';
}

if (projectName.textContent == 'My Favourite Things') {
    deskTopImgCon.style.height = 'auto';
    deskTopImgCon.style.overflowY = 'auto';
}

function loadProject(e) {
    e.preventDefault();
    devLightbox.style.display = 'block';
    //console.log(devLightbox.style.display);
}

function closeDevLightbox() {
    devLightbox.style.display = 'none';
}

projects.forEach(project => {
    project.addEventListener('click', loadProject);
})

closeBtn.addEventListener('click', closeDevLightbox);

})();