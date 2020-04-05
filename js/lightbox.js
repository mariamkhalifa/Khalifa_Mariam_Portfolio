(function (){

let lightbox = document.querySelector('.lightbox'),
    closeLightbox = document.querySelector('.close-lightbox'),
    videoThumbs = document.querySelectorAll('.thumbnail'),
    video = document.querySelector('.video'),
    videoTitle = document.querySelector('.video-title');

function showLightbox(e) {
    //console.log('!!');
    lightbox.classList.add('show');
    //console.log(this.dataset.target);
    video.src = `videos/${this.dataset.target}.mp4`;
    let thumbTitle = this.firstElementChild;
    videoTitle.textContent = thumbTitle.textContent;
}

function hideLightbox() {
    lightbox.classList.remove('show'); 
}

videoThumbs.forEach(thumb => {
    thumb.addEventListener('click', showLightbox);
})
closeLightbox.addEventListener('click', hideLightbox);

})();