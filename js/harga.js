//Header
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector ('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}



// Awal Lonceng Notifikasi

document.addEventListener('DOMContentLoaded', function() {
    const notifIcon = document.getElementById('notif-icon');
    const promoDropdown = document.getElementById('promo-dropdown');
    const closeBtn = document.querySelector('.close-btn');

    notifIcon.addEventListener('click', function() {
        promoDropdown.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        promoDropdown.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target !== notifIcon && !promoDropdown.contains(event.target)) {
            promoDropdown.style.display = 'none';
        }
    });
});
// Akhir Lonceng Notifikasi