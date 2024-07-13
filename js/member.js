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


// Member
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.member-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        if (!validateForm()) {
            return; 
        }
        const formData = new URLSearchParams(new FormData(form));

        // Send form data to server using fetch API
        fetch('mysqlmember.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                alert("Member berhasil dibuat!");
                form.reset(); 
                } else {
                    alert(data.error); // Show any other error messages
                }
            })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat memproses permintaan.');
        });
    });
});


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