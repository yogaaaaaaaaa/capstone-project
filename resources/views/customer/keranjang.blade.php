<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang</title>

    <!-- {{-- Google Web Fonts --}} -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- {{-- Bootstrap --}} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- {{-- Font Awesome --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- {{-- Style CSS --}} -->
    <link rel="stylesheet" href="{{asset('instyle.css')}}">
    
    <!-- {{-- Animation Website --}} -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    

    {{-- Start Content --}}
    <br><br>    
    <div class="head">
            <div class="container-fluid d-flex justify-content-center mt-5" style="background-color: #212529; height:90px;">
              <div class="row h-100">
                <div class=" d-flex text-white text-center align-items-center">
                      <h4>Check the items you want to buy</h4>
                </div>
              </div>
            </div>
          </div>
            {{-- End Content --}}
      
            {{-- Start Section --}}
            <div class="container">
                <div class="items">
                  <div class="item" id="product1">
                    <div class="checkbox-group">
                      <input type="checkbox" class="product-checkbox" />
                    </div>
                    <div class="image-container">
                      <img src="red.png" alt="Product Image" />
                    </div>
                    <div class="details">
                      <p>Product Name</p>
                      <p>$1199</p>
                      <div class="quantity">
                        <button onclick="decreaseQuantity('quantity1')">-</button>
                        <input type="number" value="1" min="1" id="quantity1" style="text-align: center"
                        />
                        <button onclick="increaseQuantity('quantity1')">+</button>
                      </div>
                    </div>
                  </div>
                  <div class="item" id="product2">
                    <div class="checkbox-group">
                      <input type="checkbox" class="product-checkbox" />
                    </div>
                    <div class="image-container">
                      <img src="green.png" alt="Product Image" />
                    </div>
                    <div class="details">
                      <p>Product Name</p>
                      <p>$1199</p>
                      <div class="quantity">
                        <button onclick="decreaseQuantity('quantity2')">-</button>
                        <input type="number" value="1"min="1" id="quantity2" style="text-align: center"
                        />
                        <button onclick="increaseQuantity('quantity2')">+</button>
                      </div>
                    </div>
                  </div>
                  <div class="item" id="product3">
                    <div class="checkbox-group">
                      <input type="checkbox" class="product-checkbox" />
                    </div>
                    <div class="image-container">
                      <img src="blue.png" alt="Product Image" />
                    </div>
                    <div class="details">
                      <p>Product Name</p>
                      <p>$1199</p>
                      <div class="quantity">
                        <button onclick="decreaseQuantity('quantity3')">-</button>
                        <input type="number" value="1" min="1" id="quantity3" style="text-align: center"
                        />
                        <button onclick="increaseQuantity('quantity3')">+</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="checkout-container">
                  <div class="select-all-container">
                    <input type="checkbox" id="selectAll" onclick="selectAllProducts()" />
                    <label for="selectAll">Select All</label>
                </div>
                  <button class="checkout" onclick="checkout()">Check Out</button>
                </div>
              </div>
    {{-- Section End --}}
    
    
    <!-- {{-- Script --}} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- {{-- Animation Website --}} -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      var nav = document.querySelector('nav');
      window.addEventListener('scroll', function(){
          if(window.pageYOffset > 60){
              nav.classList.add('bg-dark', 'shadow')
          } else {
              nav.classList.remove('bg-dark', 'shadow')
          }
      })

      let subMenu = document.getElementById("subMenu");
      function toggleMenu(){
        subMenu.classList.toggle("open-menu");
      }
    </script>
    <script>
            function increaseQuantity(quantityId) {
                var quantityInput = document.getElementById(quantityId);
                quantityInput.value = parseInt(quantityInput.value) + 1;
            }
      
            function decreaseQuantity(quantityId) {
                var quantityInput = document.getElementById(quantityId);
                if (parseInt(quantityInput.value) > 1) {
                    quantityInput.value = parseInt(quantityInput.value) - 1;
                }
            }
      
            function selectAllProducts() {
                var checkboxes = document.querySelectorAll('.product-checkbox');
                var selectAllCheckbox = document.getElementById('selectAll');
      
                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            }
      
            function checkout() {
                var checkboxes = document.querySelectorAll('.product-checkbox');
                var selectedProducts = [];
      
                checkboxes.forEach(function (checkbox, index) {
                    var quantityInput = document.getElementById('quantity' + (index + 1));
                    if (checkbox.checked) {
                        selectedProducts.push({
                            name: 'Product Name ' + (index + 1),
                            price: 1199, // Gantilah dengan harga produk yang sesuai
                            quantity: parseInt(quantityInput.value),
                        });
                    }
                });
      
                if (selectedProducts.length > 0) {
                    console.log('Selected Products:', selectedProducts);
                } else {
                    console.log('Pilih setidaknya satu produk untuk checkout.');
                }
            }
    </script>
</body>
</html>        