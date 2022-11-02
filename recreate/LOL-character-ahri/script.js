window.onload = function() {
const ahri = document.getElementById('ahri');
const dynasty = document.getElementById('dynasty');
const midnight = document.getElementById('midnight');
const foxfire = document.getElementById('foxfire');
const popstar = document.getElementById('popstar');
const academy = document.getElementById('academy');
const star= document.getElementById('star-guardian');
const arcade = document.getElementById('arcade');
const images = document.querySelector(".skins-gallery .gallery .left-aside .select-skin ul");

ahri.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${0}px)`;
});
dynasty.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${120}px)`;
});
midnight.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${240}px)`;
});
foxfire.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${360}px)`;
});
popstar.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${480}px)`;
});
challenger.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${600}px)`;
});
academy.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${720}px)`;
});
arcade.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${840}px)`;
});
star.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translateY(-${960}px)`;
});
}