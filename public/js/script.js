const btn = document.querySelector('.btn2');

const background_full = document.querySelector('.background-full');
const text = document.querySelector('.text-color');

btn.onclick = function () {
    this.classList.toggle('active')
    background_full.classList.toggle('active')
    text.classList.toggle('active')
}