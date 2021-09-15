let slidingInterval = 3000;
let currentFrame = 0;
let slidingImages = document.querySelectorAll('.courusel>img:not(.test)');

document.addEventListener('DOMContentLoaded', setHeightCourusel);

window.addEventListener('resize', setHeightCourusel);


setInterval(() => {
	
	if (currentFrame >= slidingImages.length) {
		currentFrame = 0; 
	}
	console.log(currentFrame);
	for (const slide of slidingImages) {
		slide.classList.add('toBack');
		slide.classList.remove('toFront');
	}	
	
	slidingImages[currentFrame].classList.remove('toBack');
	slidingImages[currentFrame].classList.add('toFront');
	
	currentFrame++;
}, slidingInterval);

function setHeightCourusel() {
	slidingImages[0].parentNode.style.height = slidingImages[0].offsetHeight + 'px';	
}
