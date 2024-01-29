import './bootstrap';

document.addEventListener('DOMContentLoaded', (event) => {
    const hamburgerButton = document.querySelector('#hamburger-button');
    hamburgerButton.addEventListener('click', () => {
        const menu = document.querySelector('#menu');
        menu.classList.toggle('hidden');
    });
});
