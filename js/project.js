(function (){

let projectName = document.querySelector('.project-title'),
    deskTopImgCon = document.querySelector('.dt-img-con'),
    mobileImg = document.querySelector('.m-img'),
    projects = document.querySelectorAll('.project'),
    devLightbox = document.querySelector('.dev-lightbox'),
    closeBtn = document.querySelector('.close-dev-lightbox'),
    //portfolioPeice = document.querySelector('.project-con'),
    mediaQuery = window.matchMedia('(min-width: 767px)');

// if (mediaQuery.matches && projectName.textContent == 'Animal Tracks') {
//     mobileImg.style.display = 'block !important'; 
//     //console.log('!!!');
// }

function parseProject(portfolio) {
    document.querySelector('.project-title').textContent = `${portfolio.Name}`;
    document.querySelector('.project-desc').innerHTML = `${portfolio.Description}`;
    document.querySelector('.project-team').innerHTML = `${portfolio.Team_Members}`;
    document.querySelector('.dt-img').src = `images/${portfolio.main_image}`;
    document.querySelector('.m-img1').src = `images/${portfolio.image_1}`;
    document.querySelector('.m-img2').src = `images/${portfolio.image_2}`;
    if (projectName.textContent == 'Animal Tracks') {
        deskTopImgCon.style.height = 'auto';
        deskTopImgCon.style.overflowY = 'auto';
        mobileImg.style.display = 'none';
    }
    
    if (projectName.textContent == 'My Favourite Things') {
        deskTopImgCon.style.height = 'auto';
        deskTopImgCon.style.overflowY = 'auto';
    }
}

function loadProject() {
    devLightbox.style.display = 'block';
    gsap.from(devLightbox, {opacity: 0, y: 10, duration: .5, ease: 'power4'});
    gsap.to(devLightbox, {opacity: 1, y: 0, duration: .5, ease: 'power4'});
    let url = `./includes/index.php?id=${this.dataset.target}`;
    fetch(url)
    .then(res => res.json())
    .then(data => {
        console.log(data);
        parseProject(data);
    })
    .catch((err) => console.log(err))

}

function closeDevLightbox() {
    devLightbox.style.display = 'none';
}

projects.forEach(project => {
    project.addEventListener('click', loadProject);
})

closeBtn.addEventListener('click', closeDevLightbox);

})();