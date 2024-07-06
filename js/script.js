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

var swiper = new Swiper(".home-slider",{
    loop:true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    centeredSlides: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
})
    
function validateForm() {
    const form = document.querySelector('.member-form');
    let isValid = true;

    form.querySelectorAll('input[required]').forEach(input => {
        const errorMessage = input.nextElementSibling;

        if (!input.validity.valid) {
            isValid = false;
            if (input.validity.valueMissing) {
                errorMessage.textContent = `${input.previousElementSibling.textContent} harus diisi.`;
            } else if (input.type === 'number' && input.validity.patternMismatch) {
                errorMessage.textContent = `${input.previousElementSibling.textContent} harus berupa angka.`;
            } else if (input.type === 'email' && input.validity.typeMismatch) {
                errorMessage.textContent = `${input.previousElementSibling.textContent} harus berupa email yang valid.`;
            } else if (input.type === 'password' && input.name === 'confirm_password') {
                const passwordInput = form.querySelector('input[name="password"]');
                if (input.value !== passwordInput.value) {
                    errorMessage.textContent = `Password tidak cocok.`;
                } else {
                    errorMessage.textContent = '';
                }
            }
        } else if (input.name === 'nik') {
            if (input.value.length !== 16) {
                isValid = false;
                errorMessage.textContent = "NIK harus tepat 16 digit.";
            } else {
                errorMessage.textContent = "";
            }
        } else {
            errorMessage.textContent = '';
        }
    });

    return isValid;
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.member-form');
    form.addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});
