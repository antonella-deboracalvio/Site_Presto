import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();



let btnLogin = document.querySelectorAll('.login-btn')
    
btnLogin.forEach(btn => {

    btn.addEventListener('click', ()=>{
        localStorage.setItem('offcanvasOpen', true)
    })
    
});


let isOpen = localStorage.getItem('offcanvasOpen')
let offcanvasRight = document.querySelector('#offcanvasRight')
let btnClose = document.querySelector('#btn-close')
if (isOpen == 'true') {
    offcanvasRight.classList.add('show')
}
btnClose.addEventListener('click', () => {
    localStorage.setItem('offcanvasOpen', false)
})


let btnHeart= document.querySelector("#btnHeart")
let heartIcon = document.querySelector("#heartIcon")
let clicked = false

btnHeart.addEventListener('click', () => {
    if (!clicked) {
        heartIcon.classList.add('fa-solid')
        heartIcon.classList.remove('fa-regular')
        clicked = true
    } else {
        heartIcon.classList.add('fa-regular')
        heartIcon.classList.remove('fa-solid')
        
        clicked = false
    }
});




