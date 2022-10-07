window.onload = function() {
const one = document.getElementById('img-1');
const two = document.getElementById('img-2');
const three = document.getElementById('img-3');
const four = document.getElementById('img-4');
const five = document.getElementById('img-5');
const six = document.getElementById('img-6');
const seven = document.getElementById('img-7');
var images = document.querySelector(".TV-plus .gallery");
console.log(one);
let current_img = 1;


one.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${current_img*1280}px)`;
});
two.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${current_img*1280}px)`;
});
three.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${current_img*1280}px)`;
});
four.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${current_img*1280}px)`;
});
five.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${current_img*1280}px)`;
});
six.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${current_img*1280}px)`;
});
seven.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${current_img*1280}px)`;
});
}