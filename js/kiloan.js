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





//get_member

function GetDetail() {
    var member_number = document.getElementById('member_number').value;

    if (member_number.length == 0) {
        document.getElementById("first_name").value = "";
        document.getElementById("last_name").value = "";
        document.getElementById("phone_number").value = "";
        document.getElementById("address").value = "";
        return;
        
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("first_name").value = myObj[0];
                document.getElementById("last_name").value = myObj[1];
                document.getElementById("phone_number").value = myObj[2];
                document.getElementById("address").value = myObj[3];
            }
        };
        xmlhttp.open("GET", "get_member.php?member_number=" + member_number, true);
        xmlhttp.send();
        alert('Member Ditemukan!');
    } 
} 

//Menambah dropdown

document.addEventListener('DOMContentLoaded', function() {
    // Function to fetch and populate items in dropdown
    function populateItems(selectElement, items) {
        selectElement.innerHTML = '';
        items.forEach(function(item) {
            const option = document.createElement('option');
            option.value = item;
            option.textContent = item;
            selectElement.appendChild(option);
        });
    }

    // Function to initialize category dropdowns
    function initializeCategoryDropdowns() {
        document.querySelectorAll('.category').forEach(function(categorySelect) {
            categorySelect.addEventListener('change', function() {
                const itemSelect = categorySelect.nextElementSibling;
                const category = categorySelect.value;
                fetchItems(category, itemSelect);
                const quantityInput = itemSelect.nextElementSibling.nextElementSibling;
                if (category === 'Min 3 kg') {
                    quantityInput.min = 3;
                    quantityInput.value = 3;
                } else {
                    quantityInput.min = 1;
                    quantityInput.value = 1;
                }
                
                
                
                
            });
            categorySelect.dispatchEvent(new Event('change')); // Trigger change event initially
        });
    }

    // Fetch items function
    function fetchItems(category, itemSelect) {
        fetch('get_itemkiloan.php?category=' + encodeURIComponent(category))
            .then(response => response.text())
            .then(data => {
                itemSelect.innerHTML = data; // Update the "Item" dropdown content
            })
            .catch(error => console.error('Error fetching items:', error));
    }

    // Initialize category dropdowns on page load
    initializeCategoryDropdowns();

    // Add item button functionality
    document.getElementById('addItem').addEventListener('click', function() {
        const orderForm = document.querySelector('.order-form').cloneNode(true);
        orderForm.querySelector('.quantity').value = 1; // Reset quantity input

        // Remove previous event listeners to avoid duplication
        orderForm.querySelector('.category').removeEventListener('change', handleCategoryChange);
        
        // Initialize dropdowns for the new order form
        const categorySelect = orderForm.querySelector('.category');
        const itemSelect = orderForm.querySelector('.item');
        categorySelect.addEventListener('change', function() {
            const category = categorySelect.value;
            fetchItems(category, itemSelect); 
            
            const quantityInput = itemSelect.nextElementSibling.nextElementSibling;
            if (category === 'Min 3 kg') {
                quantityInput.min = 3;
                quantityInput.value = 3;
            } else {
                quantityInput.min = 1;
                quantityInput.value = 1;
            }
        });
        categorySelect.dispatchEvent(new Event('change')); // Trigger change event initially

        // Append the new order form
        document.getElementById('orderForms').appendChild(orderForm);
    });

    // Handle change event for category dropdown
    function handleCategoryChange() {
        const itemSelect = this.nextElementSibling;
        const category = this.value;
        fetchItems(category, itemSelect); // Fetch items for the selected category

        const quantityInput = itemSelect.nextElementSibling.nextElementSibling;
        if (category === 'Min 3 kg') {
            quantityInput.min = 3;
            quantityInput.value = 3;
        } else {
            quantityInput.min = 1;
            quantityInput.value = 1;
        }
    }

    // Handle change event for initial form
    document.querySelectorAll('.category').forEach(function(categorySelect) {
        categorySelect.addEventListener('change', handleCategoryChange);
    });

    // Handle change event for dynamically added forms
    document.getElementById('orderForms').addEventListener('change', function(event) {
        const orderItems = document.getElementById('orderItems');
        orderItems.innerHTML = '';

        document.querySelectorAll('.order-form').forEach(function(orderForm) {
            const category = orderForm.querySelector('.category').value;
            const item = orderForm.querySelector('.item').value;
            const quantity = orderForm.querySelector('.quantity').value;

            if (item && quantity > 0) {
                const orderItem = document.createElement('div');
                orderItem.className = 'order-item';
                orderItem.textContent = `kategori: ${category}, barang: ${item}, kuantitas: ${quantity}`;
                orderItems.appendChild(orderItem);
            }
        });
    });
});


// Memasukkan kategori barang
document.addEventListener('DOMContentLoaded', function() {
    fetch('fetch_kiloan.php')
        .then(response => response.json())
        .then(itemsData => {
            console.log('Fetched items:', itemsData); // Log fetched data
            
            // Function to populate items in dropdown
            function populateItems(selectElement, items) {
                selectElement.innerHTML = '';
                items.forEach(function(item) {
                    const option = document.createElement('option');
                    option.value = item;
                    option.textContent = item;
                    selectElement.appendChild(option);
                });
            }



            orderForms.addEventListener('change', function (event) {
                const orderForm = event.target.closest('.order-form');
                const categorySelect = orderForm.querySelector('.category');
                const quantityInput = orderForm.querySelector('.quantity');
                const minQuantity = categorySelect.value === 'Min 3 kg' ? 3 : 1; // Minimum is 3 for "Min 3 kg", 1 for others
            
                if (quantityInput.value < minQuantity) {
                  quantityInput.value = minQuantity; // Set minimum quantity if entered value is less
                  alert(`Minimum quantity for "${categorySelect.value}" is ${minQuantity}.`);
                }
            });

            // Function to initialize category dropdowns
            function initializeCategoryDropdowns() {
                document.querySelectorAll('.category').forEach(function(categorySelect) {
                    categorySelect.addEventListener('change', function() {
                        const itemSelect = categorySelect.nextElementSibling;
                        const category = categorySelect.value;
                        const items = itemsData[category] || [];
                        populateItems(itemSelect, items);
                    });
                    categorySelect.dispatchEvent(new Event('change'));
                });
            }

            // Initialize category dropdowns on page load
            initializeCategoryDropdowns();

            // Add item button functionality
            document.getElementById('addItem').addEventListener('click', function() {
                const orderForm = document.querySelector('.order-form').cloneNode(true);
                orderForm.querySelector('.quantity').value = 1;

                
                
                // Get selected category from original form
                const selectedCategory = document.querySelector('.category').value;
                
                // Copy selected category to hidden input in cloned form
                const clonedCategoryInput = orderForm.querySelector('#selectedCategory');
                clonedCategoryInput.value = selectedCategory;
                
                initializeCategoryDropdowns(); // Re-initialize dropdowns
                document.getElementById('orderForms').appendChild(orderForm);
            });
        })
        .catch(error => console.error('Error fetching items:', error));
});

$(document).ready(function(){
    $(".category").change(function(){
      var category = $(this).val();
      $.ajax({
        url: "get_itemkiloan.php",
        type: "GET",
        data: {category: category},
        success: function(data){
          $(".item").html(data); // Update the "Item" dropdown content
        }
      });
    });
  });



// total















