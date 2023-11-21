<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracking</title>

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
    <link rel="stylesheet" href="{{asset('indlic.css')}}">

    
    <!-- {{-- Animation Website --}} -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <!-- {{-- Navbar Start --}} -->
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
            </ul>
                <a href="{{route('login')}}" class="me-3" style="text-decoration: none; color: rgb(255, 255, 255);">Log In</a>
                <button class="btn get-started text-white" style="background-color: #EB1616;">Get Started</button>
              </div>
            </div>
          </nav>
        <section id="container-fluid">
          <div class="container-track">
              <img src="https://media.suara.com/pictures/653x366/2015/06/23/o_19ofjmq7k6vf8hi11fa1i12bska.jpg" class="rounded float-start" alt="...">
          <div class="search">
            <div class="tracker-container">
              <div class="search-container">
                  <input type="text" id="phoneNumberInput" placeholder="Enter the order number">
                  <button onclick="searchNumber()"><i class="fas fa-arrow-right rounded-circle"></i></button>
              </div>
              <div id="resultContainer"></div>
          </div>
          <script src="script.js"></script>
          <table class="hero">
              <thead>
                  <tr>
                      <th>Orders Name</th>
                      <th>Orders Date</th>
                      <th>Orders Status</th>
                      <th>Progress</th>
                  </tr>
              </thead>
              <thead>
                  <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                  </tr>
              </thead>
          </table>
          </div>
          </div>
      </section>
          <div class="hero">
              <div class="paragraf-home">Order tracking 
                <br><p>Toko Hang siji Distro & sablon</p>
                <p1>What is meant by order tracking ?</p1><br><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem ratione harum consequuntur omnis nostrum quae fugit ullam, veniam tempore assumenda architecto accusantium officiis sed esse neque culpa totam. Rerum, facere. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis repellat nemo, necessitatibus facere laboriosam deleniti perferendis, sequi delectus quas sit laborum tempora maiores iure voluptate voluptatum quisquam libero cum sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, maiores. Aperiam ipsum quis vero nemo saepe iure provident aliquid at deleniti ipsam rem quas fugiat voluptates laudantium debitis, similique minima. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias delectus aut a laborum impedit minima ratione omnis, saepe porro harum nostrum quibusdam illum quas labore ut quos dignissimos voluptates sunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque alias, similique, corrupti, dolore mollitia doloremque fugit ex nostrum asperiores assumenda in? Rerum nihil fuga suscipit consectetur praesentium omnis eius repudiandae.</p>
              </div>
          </div>
      <footer class="hero-6">
      <div class="container-fluid">
        <div class="container ">
          <div class="row">
            <div class="col-4 ">
              <h2 class=" mt-5">Hang Siji</h2>
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
            <div class="col-4 mt-5">
              <h2>General</h2>
              <div class="menu ">
                <a href="">Home</a>
                <a href="">Profil</a>
                <a href="">Service</a>
                <a href="">Tracking</a>
                <a href="">Team</a>
                <a href="">Contact</a>
              </div>
            </div>
            <div class="col-4 mt-5">
              <h2>Company</h2>
              <div class="menu">
                <a href="">Website Terms</a>
                <a href="">Privacy police</a>
                <img src="https://media.suara.com/pictures/653x366/2015/06/23/o_19ofjmq7k6vf8hi11fa1i12bska.jpg" alt="Company Logo" width="140" height="140">
              </div>
            </div>
          </div>
        </div>
      </div>
      </footer>
          <!-- {{-- Section 6 End --}} -->
    
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
        </script>
    </body>
    </html>