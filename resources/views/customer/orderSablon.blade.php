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
    <link rel="stylesheet" href="{{asset('orderSablon.css')}}">

    {{-- Animation Website --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
    {{-- Navbar Start --}}
    @include('customer.partials.navbar')
    {{-- Navbar End --}}

    {{-- Start Content --}}
    {{-- <section class="hero"> --}}
        <div class="head">
            <div class="container-fluid d-flex justify-content-center mt-5" style="background-color: #212529; height:90px;">
              <div class="row h-100">
                <div class=" d-flex text-white text-center align-items-center">
                      <p>Start screen printing your<br>
                      t-shirt according to your wishes</p>
                </div>
              </div>
            </div>
          </div>
            {{-- End Content --}}
      
            {{-- Start Section --}}
            
          <section class="hero">
            <form method="POST">
              @csrf
              <div class="container mt-3">
      
                <div class="row">
                  <div class=" col-sm-12 col-md-6">
                    <div class=" mb-2">
                     <label class="form-label text-white" for="order">Order Name</label>
                     <input type="text" class="form-control" id="order" placeholder="Input Name" required>
                    </div>
                  </div>
      
                  <div class=" col-sm-12 col-md-6">
                    <div class=" mb-2">
                      <label class="form-label text-white" for="addres">Address</label>
                      <input type="text" class="form-control" id="addres" placeholder="Input Address" required>
                    </div>
                  </div>
                </div>
      
                <div class="row">
                  <div class=" col-sm-12 col-md-6">
                    <div class=" mb-2">
                     <label class="form-label text-white" for="number">Telphone Number / Whatsapp</label>
                     <input type="number" class="form-control" id="number" placeholder="Input Number" required>
                    </div>
                  </div>
      
                  <div class=" col-sm-12 col-md-6">
                    <div class=" mb-2">
                      <label class="form-label text-white" for="email">Email</label>
                      <input type="email" class="form-control email" id="email" placeholder="Input Email" required>
                    </div>
                  </div>
                </div>
      
                <div class="row">
                  <div class=" col-sm-12 col-md-6">
                    <div class=" mb-2">
                     <label class="form-label text-white" for="upload">Upload Design</label>
                     <input type="url" class="form-control" id="upload" placeholder="Input your url" required>
                    </div>
                  </div>
      
                  <div class=" col-sm-12 col-md-6">
                    <div class=" mb-2">
                      <label class="form-label text-white" for="quantity">Quantity</label>
                      <input type="number" class="form-control" id="quantity" placeholder="Input quantity" required>
                    </div>
                  </div>
                </div>
      
                <div class=" col-sm-12 col-md-12">
                  <div class=" mb-2">
                    <label class="form-label text-white" for="design">Design and screen printing information</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="design" style="height: 100px"></textarea>
                  </div>
                </div>
      
                {{-- <div class="row">
                  <div class="col">
                    <div class=" mb-2">
                     <label class="form-label text-white upload" for="upload">Upload Design</label>
                     <div class="drag-area">
                      <div class="icon"><i class="bi bi-cloud-arrow-up"></i></div>
                      <p>Click to upload or drag and drop <br> MAX. File Size: 30MB</p>
                      <button>Upload</button>
                      <input type="file" id="upload" hidden>
                     </div>
                    </div>
                  </div>
      
                  <div class="col">
                    <div class=" mb-2">
                      <label class="form-label text-white" for="design">Design and screen printing information</label>
                      <textarea class="form-control" placeholder="Leave a comment here" id="design" style="height: 100px"></textarea>
                    </div>
                  </div>
                </div>
              </div> --}}
            {{-- End Section --}}
      
            {{-- Start Button --}}
            <div class="button">
            <div class="btn d-flex justify-content-center mx-5">
            <button class="btn get-started text-white form-control" style="background-color: #EB1616;">Submit Order</button><br>
            </div>
      
            {{-- <div class="btn d-flex justify-content-center p-3">
            <button class="btn get-started text-white" style="background-color: #EB1616;"><i class="bi bi-cart2"> Add To Cart</i></button>
            </div>
            </div> --}}
            {{-- End Button --}}
          </form>
          </section>
      </body>
      
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