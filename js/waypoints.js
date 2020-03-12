(function (){

let waypoint1 = new Waypoint({
	element: document.getElementById('about'),
	handler: function(direction) {
        document.querySelector('#about').style.opacity = 1;
        gsap.to('#about', {y: 10, duration: .2});
    },
    offset: 300
});

let waypoint2 = new Waypoint({
	element: document.getElementById('development'),
	handler: function(direction) {
        console.log('here');
        document.querySelector('#development').style.opacity = 1;
        gsap.to('#development', {y: 10, duration: .2});
    },
    offset: 300
});

let waypoint3 = new Waypoint({
	element: document.getElementById('motion'),
	handler: function(direction) {
        document.querySelector('#motion').style.opacity = 1;
        gsap.to('#motion', {y: 10, duration: .2});
    },
    offset: 300
});

let waypoint4 = new Waypoint({
	element: document.getElementById('contact'),
	handler: function(direction) {
        document.querySelector('#contact').style.opacity = 1;
        gsap.to('#contact', {y: 10, duration: .2});
    },
    offset: 300
});

})();