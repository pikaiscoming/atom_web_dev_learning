window.onload = function() {
const one = document.getElementById('img-1');
one.style.backgroundColor = "#707070";
const two = document.getElementById('img-2');
const three = document.getElementById('img-3');
const four = document.getElementById('img-4');
const five = document.getElementById('img-5');
const six = document.getElementById('img-6');
const seven = document.getElementById('img-7');
const images = document.querySelector(".TV-plus .gallery");
const buts = document.getElementsByClassName("dot-but");


one.addEventListener('click', () => {
    two.style.backgroundColor = "#d6d6d6";
    three.style.backgroundColor = "#d6d6d6";
    four.style.backgroundColor = "#d6d6d6";
    five.style.backgroundColor = "#d6d6d6";
    six.style.backgroundColor = "#d6d6d6";
    seven.style.backgroundColor = "#d6d6d6";
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${0}px)`;
    one.style.backgroundColor = "#707070";

});
two.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${1*1280}px)`;
    two.style.backgroundColor = "#707070";
    one.style.backgroundColor = "#d6d6d6";
    three.style.backgroundColor = "#d6d6d6";
    four.style.backgroundColor = "#d6d6d6";
    five.style.backgroundColor = "#d6d6d6";
    six.style.backgroundColor = "#d6d6d6";
    seven.style.backgroundColor = "#d6d6d6";
});
three.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${2*1280}px)`;
    three.style.backgroundColor = "#707070";
    two.style.backgroundColor = "#d6d6d6";
    one.style.backgroundColor = "#d6d6d6";
    four.style.backgroundColor = "#d6d6d6";
    five.style.backgroundColor = "#d6d6d6";
    six.style.backgroundColor = "#d6d6d6";
    seven.style.backgroundColor = "#d6d6d6";
});
four.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${3*1280}px)`;
    four.style.backgroundColor = "#707070";
    two.style.backgroundColor = "#d6d6d6";
    three.style.backgroundColor = "#d6d6d6";
    one.style.backgroundColor = "#d6d6d6";
    five.style.backgroundColor = "#d6d6d6";
    six.style.backgroundColor = "#d6d6d6";
    seven.style.backgroundColor = "#d6d6d6";
});
five.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${4*1280}px)`;
    five.style.backgroundColor = "#707070";
    two.style.backgroundColor = "#d6d6d6";
    three.style.backgroundColor = "#d6d6d6";
    four.style.backgroundColor = "#d6d6d6";
    one.style.backgroundColor = "#d6d6d6";
    six.style.backgroundColor = "#d6d6d6";
    seven.style.backgroundColor = "#d6d6d6";
});
six.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${5*1280}px)`;
    six.style.backgroundColor = "#707070";
    two.style.backgroundColor = "#d6d6d6";
    three.style.backgroundColor = "#d6d6d6";
    four.style.backgroundColor = "#d6d6d6";
    five.style.backgroundColor = "#d6d6d6";
    one.style.backgroundColor = "#d6d6d6";
    seven.style.backgroundColor = "#d6d6d6";
});
seven.addEventListener('click', () => {
    images.style.transitionDuration = "0.5s";
    images.style.transform = `translate(-${6*1280}px)`;
    two.style.backgroundColor = "#d6d6d6";
    three.style.backgroundColor = "#d6d6d6";
    four.style.backgroundColor = "#d6d6d6";
    five.style.backgroundColor = "#d6d6d6";
    six.style.backgroundColor = "#d6d6d6";
    one.style.backgroundColor = "#d6d6d6";
    seven.style.backgroundColor = "#707070";
});
}