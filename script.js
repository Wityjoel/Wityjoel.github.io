let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active'); 
}

window.onscroll=()=>{
    menubar.classlist.remove('fa-times');
    navbar.classlist.remove('active');
}

 

var swiper = new Swiper(".reviews-slider" , {
    loop:true,
    spaceBetween: 30,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640:{
            slidesPerView: 1,
        },
        768:{
            slidesPerView: 2,
        },
        1024:{
            slidesPerView: 3,
        },
    }
});
