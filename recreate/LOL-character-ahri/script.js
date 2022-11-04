window.onload = function() {
const backimage = document.getElementById('gallery');
const images = document.querySelector(".skins-gallery #gallery .left-aside .select-skin ul");
const btns = images.querySelectorAll('button');
console.log(btns[0].id);
var idlist = []

for (var i = 0; i < btns.length; i++) {
    idlist.push(btns[i].id);
}
console.log(idlist);
function geturl(Id) {
    var content = document.getElementById(Id).getElementsByTagName('img')[0];
    return content.src;
};
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
    backimage.style.backgroundImage = 'url('+ geturl(this.id) +')', 2;
    images.style.transitionDuration = "0.4s";
    var num = idlist.indexOf(this.id);
    images.style.transform = `translateY(-${num*120}px)`;
    });
}

}

