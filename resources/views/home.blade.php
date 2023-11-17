<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Hang Siji</title>

    {{-- Google Web Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{asset('instyle.css')}}">

    {{-- Animation Website --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
    {{-- Navbar Start --}}
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
              <a href="{{route('login')}}" class="me-3" style="text-decoration: none; color: rgb(255, 255, 255);">Log In</a>
              <button class="btn get-started text-white" style="background-color: #EB1616;">Get Started</button>
            </div>
          </div>
        </nav>
      </div>
      {{-- Navbar End --}}
  
      {{-- Section 1 Start --}}
      <div class="container-fluid hero">
        <div class="container">
          <div class="row distance">
            <div class="col-lg-8 col-md-12">
              <div class="tagline">
                <h1 class="home-heading" data-aos="fade-right" data-aos-duration="1000">Hang Siji<br><span>Distro</span> & Sablon</h1>
                <p class="paragraf-home" data-aos="fade-right" data-aos-duration="1000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quam sapien, tincidunt a arcu in, aliquet condimentum velit. 
                    Ut nisl risus, ultricies vitae faucibus ac, ultrices nec purus. Curabitur vitae convallis tellus.</p>
                <div class="btn-home mt-6">
                  <button class="btn btn-contact rounded-pill me-3 text-white py-3" data-aos="zoom-in" data-aos-duration="1000">Contact Us</button>
                  <button class="btn btn-outline-light rounded-pill py-3" style="width: 170px;" data-aos="zoom-in" data-aos-duration="1000">Get Started</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: auto;" data-aos="fade-down-left" data-aos-duration="1000">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="border-radius: 15px;">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/kaos3.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/kaos1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Section 1 End --}}
      {{-- Our Client Start --}}
      <div class="container-fluid" style="background-color: #212529; height:130px;">
        <div class="row h-100">
          <div class="col-3 d-flex align-items-center justify-content-center">
            <h2 class="text-white">Our Client</h2>
          </div>
          <div class="col-9 d-flex align-items-center">
            <div class="slider">
              <div class="slider-track">
                <div class="slide d-flex justify-content-center align-items-center">
                  <img src="{{asset('assets/img/google.png')}}" alt="" width="180px">
                </div>
                <div class="slide d-flex justify-content-center align-items-center">
                  <img src="{{asset('assets/img/amazon.png')}}" alt="" width="180px">
                </div>
                <div class="slide d-flex justify-content-center align-items-center">
                  <img src="{{asset('assets/img/tvone.png')}}" alt="" width="180px">
                </div>
                <div class="slide d-flex justify-content-center align-items-center">
                  <img src="{{asset('assets/img/transtv.png')}}" alt="" width="220px">
                </div>
                <div class="slide d-flex justify-content-center align-items-center">
                  <img src="{{asset('assets/img/aqua.png')}}" alt="" width="180px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Our CLient End --}}
      {{-- Section 2 Start --}}
      <div class="container-fluid hero-2 padd-t">
        <div class="container">
          <div class="title text-center text-white" data-aos="zoom-in" data-aos-duration="1000">
            <h2 style="font-weight: 800; font-family:'Poppins';">Why should you trust the quality<br>of our screen printing?</h2>
            <p class="mt-4">We are confident that we are the best choice for your screen printing needs. With our unmatched experience and commitment to quality, we are committed to delivering stunning results and meeting your expectations.</p>
          </div>
          {{-- <div class="all-card mt-5 d-flex justify-content-center"> --}}
          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card-quality" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="circle-icon position-relative mx-auto my-auto">
                  <img src="{{asset('assets/img/product.png')}}" class="position-absolute top-50 start-50 translate-middle" alt="" width="70%">
                </div>
                <h3 class="card-title text-center mt-3">Good Product Quality</h3>
                <p class="card-subtitle text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-quality-center" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="circle-icon-center position-relative mx-auto my-auto">
                  <img src="{{asset('assets/img/shield.png')}}" class="position-absolute top-50 start-50 translate-middle" alt="" width="70%">
                </div>
                <h3 class="card-title-center text-center mt-3">Guaranteed Reliability</h3>
                <p class="card-subtitle-center text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-quality" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="circle-icon position-relative mx-auto my-auto">
                  <img src="{{asset('assets/img/request.png')}}" class="position-absolute top-50 start-50 translate-middle" alt="" width="70%">
                </div>
                <h3 class="card-title text-center mt-3">Good Screen Printing Design</h3>
                <p class="card-subtitle text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          {{-- </div> --}}
        </div>
      </div>
      {{-- Section 2 End --}}
      {{-- Section 3 Start --}}
      <div class="container-fluid hero-3 padd-t">
        <div class="container">
          <div class="tittle text-center text-white" data-aos="zoom-in" data-aos-duration="1000">
            <h2 style="font-weight: 800; font-family:'Poppins';">Screen printing process from start<br>to finish</h2>
            <p class="mt-4">
              The following is an overview of the technical steps for screen printing from start to finish
            </p>
          </div>
          <div class="image vh-100" style="background-color:rgb(189, 189, 189);">
            
          </div>
        </div>
      </div>
      {{-- Section 3 End --}}
      {{-- Section 4 Start --}}
      <div class="container-fluid hero-4 padd-t">
        <div class="container-sm">
          <div class="row">
            <div class="col-md-6 mb-5">
              <div class="title text-white" data-aos="zoom-in" data-aos-duration="1000">
                <h3 class="title-branding mb-3">Branding our product<br>"Hang Siji Tshirt"</h3>
                <p class="subtitile-branding mb-3">This is a t-shirt product from our branding, namely "Hang Siji T-shirt", this t-shirt provides comfort to wear, and is able to absorb sweat.</p>
                <div class="see">
                  <button class="btn rounded-pill text-white" style="padding: 1rem 2rem; background-color: #EB1616;">See More</button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img src="{{asset('assets/img/kaos1.jpg')}}" class="img-branding" alt="" style="" data-aos="zoom-in" data-aos-duration="2000">
            </div>
          </div>
        </div>
      </div>
      {{-- Section 4 End --}}
      {{-- Section 5 Start --}}
      <div class="container-fluid hero-5 padd-t">
        <div class="container">
          <div class="title text-center text-white">
            <h2 style="font-weight: 800; font-family:'Poppins';">Testimoni</h2>
          </div>
          <div class="padd-t"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-testi" data-aos="fade-up" data-aos-duration="2000">
                <h5 class="text-center mt-3 testi-title">Testimonials</h5>
                <p class="text-center testi-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.</p>
                <div class="outer-box">
                  <div class="img-testi d-flex justify-content-center">
                    <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="img-size" alt="" width="120px">
                  </div>
                  <p class="comment-user mt-4 text-center">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.”</p>
                  <h6 class="name-user text-center">- Jhon Kennedy</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-testi" data-aos="fade-up" data-aos-duration="2000">
                <h5 class="text-center mt-3 testi-title">Testimonials</h5>
                <p class="text-center testi-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.</p>
                <div class="outer-box">
                  <div class="img-testi d-flex justify-content-center">
                    <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="img-size" alt="" width="120px">
                  </div>
                  <p class="comment-user mt-4 text-center">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.”</p>
                  <h6 class="name-user text-center">- Jhon Kennedy</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-testi" data-aos="fade-up" data-aos-duration="2000">
                <h5 class="text-center mt-3 testi-title">Testimonials</h5>
                <p class="text-center testi-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.</p>
                <div class="outer-box">
                  <div class="img-testi d-flex justify-content-center">
                    <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="img-size" alt="" width="120px">
                  </div>
                  <p class="comment-user mt-4 text-center">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.”</p>
                  <h6 class="name-user text-center">- Jhon Kennedy</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-4">
              <div class="card-testi" data-aos="fade-up" data-aos-duration="2000">
                <h5 class="text-center mt-3 testi-title">Testimonials</h5>
                <p class="text-center testi-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.</p>
                <div class="outer-box">
                  <div class="img-testi d-flex justify-content-center">
                    <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="img-size" alt="" width="120px">
                  </div>
                  <p class="comment-user mt-4 text-center">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.”</p>
                  <h6 class="name-user text-center">- Jhon Kennedy</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-4">
              <div class="card-testi" data-aos="fade-up" data-aos-duration="2000">
                <h5 class="text-center mt-3 testi-title">Testimonials</h5>
                <p class="text-center testi-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.</p>
                <div class="outer-box">
                  <div class="img-testi d-flex justify-content-center">
                    <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="img-size" alt="" width="120px">
                  </div>
                  <p class="comment-user mt-4 text-center">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.”</p>
                  <h6 class="name-user text-center">- Jhon Kennedy</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-4">
              <div class="card-testi" data-aos="fade-up" data-aos-duration="2000">
                <h5 class="text-center mt-3 testi-title">Testimonials</h5>
                <p class="text-center testi-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.</p>
                <div class="outer-box">
                  <div class="img-testi d-flex justify-content-center">
                    <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="img-size" alt="" width="120px">
                  </div>
                  <p class="comment-user mt-4 text-center">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed elementum et fringilla id bibendum vestibulum.”</p>
                  <h6 class="name-user text-center">- Jhon Kennedy</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Section 6 Start (Footer)--}}
      <div class="container-fluid hero-6 padd-t">
        <div class="container">
          <div class="row">
            <div class="col-4">
              <h2 class="">Hang Siji</h2>
              <p class="">Jl. Umbul - Gunungsari, Sumbergondo RT.1/RW.3, Salamrejo, Sumbergondo, Kec. Glenmore, Kabupaten Banyuwangi, Jawa Timur 68466</p>
              <h2 class="">Our Contact (CS)</h2>
              <div class="icon-email">
                <p class="">example@gmail.com</p>
              </div>
              <div class="icon-contact">
                <p class="">082357082325</p>
              </div>
              <div class="icon-medsos">

              </div>
            </div>
            <div class="col-4">
              <h2>General</h2>
              <div class="menu">
                <a href="">Home</a>
                <a href="">Profil</a>
                <a href="">Service</a>
                <a href="">Tracking</a>
                <a href="">Team</a>
                <a href="">Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Section 6 End --}}

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Animation Website --}}
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
    </script>
</body>
</html>