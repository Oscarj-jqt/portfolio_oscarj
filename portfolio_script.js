// let menu = document.querySelector('#menu-btn');
// let header = document.querySelector('.header');


// menu.onclick = () => {
//     menu.classList.toggle('fa-times');
//     header.classList.toggle('active');
//     document.body.classList.toggle('active');
// }

// window.onscroll = () => {
//     if(window.innerWidth < 991) {
//         menu.classList.remove('fa-times');
//         header.classList.remove('active');
//         document.body.classList.remove('active');
//     }
// }

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.header .navbar');
let header = document.querySelector('.header');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    let header = document.querySelector('.header');

    if(window.scrollY > 0) {
        header.classList.add('active')
    } else {
        header.classList.remove('active')
    }
}
