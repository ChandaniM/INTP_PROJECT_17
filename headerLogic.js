const navToggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.mobile-nav-bar');

navToggle.addEventListener('click', () => {
    nav.classList.toggle('visible');
})