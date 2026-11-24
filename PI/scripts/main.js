let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const TextSlides = document.querySelectorAll('.TextSlide');

function showNextSlide() {
    slides[currentIndex].classList.remove('active');
    TextSlides[currentIndex].classList.remove('activated');
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add('active');
    TextSlides[currentIndex].classList.add('activated');
}


slides[currentIndex].classList.add('active');
TextSlides[currentIndex].classList.add('activated');
setInterval(showNextSlide, 4000);

window.addEventListener('scroll', function() {
    const header = document.getElementById('Header');
    if (window.scrollY > 0) {
        header.classList.add('scrolled'); // Add class when scrolling down
    } else {
        header.classList.remove('scrolled'); // Remove class when at the top
    }
});