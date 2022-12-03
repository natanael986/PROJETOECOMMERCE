const btn = document.querySelector('.btn2');

const background_full = document.querySelector('.background-full');
const text = document.querySelector('.text-color');
if (sessionStorage.getItem("Darkmode") == "false") {
    document.querySelector('#MODEDARK').classList.toggle("active");
    document.querySelector('#MODEDARK1').classList.toggle("active");
    document.querySelector('.btn2').classList.toggle("active");
}
btn.onclick = function () {
    if (sessionStorage.getItem("Darkmode") == "true") {
        sessionStorage.setItem("Darkmode", "false");

    } else {
        sessionStorage.setItem("Darkmode", "true");
    }
    this.classList.toggle('active')
    background_full.classList.toggle('active')
    text.classList.toggle('active')
}