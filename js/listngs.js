const navbarElement = document.getElementById('navbar');
const navbarElement2 = document.getElementById('nav-btn');
const upBtn = document.getElementById('up-btn');

window.addEventListener('scroll', function () {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 100) {
        upBtn.style.transform = 'translateX(0%)';
        navbarElement.style.top = '-100%';
        navbarElement.style.transition = 'all 0.5s ease';
        navbarElement.style.backdropFilter = 'all 0.5s ease';
        navbarElement2.style.transform = 'translateX(0%)';

    } else {
        upBtn.style.transform = 'translateX(400%)';
        navbarElement.style.top = '0%';
        navbarElement2.style.transform = 'translateX(100%)';
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// random order
const container = document.querySelector('.container');
const cards = container.querySelectorAll('.card');

// Convert the NodeList to an array so that we can use the array shuffle method
const cardsArray = Array.from(cards);

// Shuffle the array using the Fisher-Yates algorithm
for (let i = cardsArray.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [cardsArray[i], cardsArray[j]] = [cardsArray[j], cardsArray[i]];
}

// Append the shuffled cards back to the container in their new order
for (let i = 0; i < cardsArray.length; i++) {
    container.appendChild(cardsArray[i]);
}