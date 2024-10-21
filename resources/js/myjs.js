import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();


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

