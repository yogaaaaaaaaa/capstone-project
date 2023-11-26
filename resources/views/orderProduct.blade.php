<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{asset('assets/css/orderProduct.css')}}">
    <title>Hangsiji</title>
</head>
<body>

    <section class="hero">
        <!--Navbar-->
        <head>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                    <div class="container p-lg-3">
                      <a class="navbar-brand text-white" href="#" style="font-weight: 700; font-family:'Poppins'; font-size:1.5rem;">Hang Siji</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Profil</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Service</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Tracking</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Team</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                          {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li> --}}
                        </ul>
                        <img src="{{asset('assets/img/user.jpg')}}" alt="" class="user-pic" onclick="toggleMenu()">
                        <div class="sub-menu-wrap" id="subMenu">
                          <div class="sub-menu shadow">
                            <div class="user-info">
                              <img src="{{asset('assets/img/user.jpg')}}" alt="">
                            </div>
                            <hr>

                            <a href="#" class="sub-menu-link">
                              <div class="content-left">
                                <img src="{{asset('assets/img/profile.png')}}" alt="">
                              </div>
                              <div class="content-right">
                                <p>Edit Profile</p>
                                <span>&gt;</span>
                              </div>
                            </a>
                            <a href="#" class="sub-menu-link">
                              <div class="content-left">
                                <img src="{{asset('assets/img/setting.png')}}" alt="">
                              </div>
                              <div class="content-right">
                                <p>Setting</p>
                                <span>&gt;</span>
                              </div>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <a href="route('logout')" class="sub-menu-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                <div class="content-left">
                                  <img src="{{asset('assets/img/logout.png')}}" alt="">
                                </div>
                                <div class="content-right">
                                  <p>Logout</p>
                                  <span>&gt;</span>
                                </div>
                              </a>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </nav>
              </div>
        </head>

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
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="img-fluid rounded-start object-fit-cover " alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body pt-0">
                        <p class="product-category"><small class="text-body-secondary">Product Category</small></p>
                        <h3 class="product-name">Product name</h3>
                        <p class="product-price">Rp.10.000,00</p>
                        <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">View Product</button>
                        <div class="checkout-button mt-5">
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #EB1616">Submit Order</button>
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">Add to cart
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="img-fluid rounded-start object-fit-cover " alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body pt-0">
                        <p class="product-category"><small class="text-body-secondary">Product Category</small></p>
                        <h3 class="product-name">Product name</h3>
                        <p class="product-price">Rp.10.000,00</p>
                        <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">View Product</button>
                        <div class="checkout-button mt-5">
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #EB1616">Submit Order</button>
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">Add to cart
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="img-fluid rounded-start object-fit-cover " alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body pt-0">
                        <p class="product-category"><small class="text-body-secondary">Product Category</small></p>
                        <h3 class="product-name">Product name</h3>
                        <p class="product-price">Rp.10.000,00</p>
                        <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">View Product</button>
                        <div class="checkout-button mt-5">
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #EB1616">Submit Order</button>
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">Add to cart
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="img-fluid rounded-start object-fit-cover " alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body pt-0">
                        <p class="product-category"><small class="text-body-secondary">Product Category</small></p>
                        <h3 class="product-name">Product name</h3>
                        <p class="product-price">Rp.10.000,00</p>
                        <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">View Product</button>
                        <div class="checkout-button mt-5">
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #EB1616">Submit Order</button>
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">Add to cart
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="img-fluid rounded-start object-fit-cover " alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body pt-0">
                        <p class="product-category"><small class="text-body-secondary">Product Category</small></p>
                        <h3 class="product-name">Product name</h3>
                        <p class="product-price">Rp.10.000,00</p>
                        <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">View Product</button>
                        <div class="checkout-button mt-5">
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #EB1616">Submit Order</button>
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">Add to cart
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="img-fluid rounded-start object-fit-cover " alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body pt-0">
                        <p class="product-category"><small class="text-body-secondary">Product Category</small></p>
                        <h3 class="product-name">Product name</h3>
                        <p class="product-price">Rp.10.000,00</p>
                        <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">View Product</button>
                        <div class="checkout-button mt-5">
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #EB1616">Submit Order</button>
                            <button class="border-0 rounded-3 p-2 text-white" style="background: #212529">Add to cart
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

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
