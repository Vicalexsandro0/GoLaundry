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



// Pemesanan


// total
function updateTotal() {
    const orderItems = document.querySelectorAll('.order-item');
    let total = 0;
    orderItems.forEach(item => {
        
        const itemName = item.textContent.split(' ')[0];
        const itemPrice = parseFloat(item.textContent.split('Rp ')[1]);
        const quantity = parseInt(item.textContent.split('x')[1]);
        total += itemPrice * quantity;
    });
    totalPaymentSpan.textContent = `Rp ${total}`;
}


orderForm.addEventListener('submit', (e) => {
    e.preventDefault();

    
    const formData = new FormData(orderForm);
    formData.append('totalPayment', totalPaymentSpan.textContent.replace('Rp ', ''));

    fetch('save_order.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        
        orderForm.reset();
        orderItemsContainer.innerHTML = '';
        totalPaymentSpan.textContent = 'Rp 0';
    })
    .catch(error => console.error('Error:', error));
});
