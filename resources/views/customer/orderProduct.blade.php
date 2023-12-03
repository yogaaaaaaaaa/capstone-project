<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{asset('assets/css/orderProduct.css')}}">
    <title>Hangsiji</title>
</head>
<body>

    <section class="hero">
        <!--Navbar-->
        @include('customer.partials.navbar')
        <!--End Navbar-->

        <!--Start Heading-->
        <div class="container-fluid d-flex justify-content-center mt-5" style="background-color: #212529; height:90px;">
            <div class="row h-100">
            <div class=" d-flex text-white text-center align-items-center">
                    <h2>Choose the product you want</h2>
            </div>
            </div>
        </div>
        <!--End Heading-->

        <!--Product list-->
        <div class="row pb-2 mt-5 mb-3 d-flex justify-content-center ">
            @foreach ($products as $product)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{$image}}" class="img-fluid rounded-start object-fit-cover " alt="...">
                        </div>
                    <div class="col-md-6">
                        <div class="card-body pt-0">
                            <p class="product-category"><small class="text-body-secondary">{{$categories}}</small></p>
                            <h3 class="product-name">{{$name_product}}</h3>
                            <p class="product-price">{{$price}}</p>
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">View Product</button>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--End Product List-->

        <!--carousel controller start-->
        <!--carousel controller end-->
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
            var nav = document.querySelector('nav');
            window.addEventListener('scroll', function(){
                if(window.pageYOffset > 60){
                    nav.classList.add('bg-dark', 'shadow')
                } else {
                    nav.classList.remove('bg-dark', 'shadow')
                }
            })
            window.addEventListener('scroll', function() {
                var backToTopButton = document.querySelector('.back-to-top');
                if (window.scrollY > 300) { // Ubah nilai 300 sesuai dengan posisi scroll yang diinginkan
                backToTopButton.classList.add('show');
                } else {
                backToTopButton.classList.remove('show');
                }
            })
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
    </script>

</body>
</html>
