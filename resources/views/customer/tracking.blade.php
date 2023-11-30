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
    <link rel="stylesheet" href="{{asset('instyle.css')}}">
    
    <!-- {{-- Animation Website --}} -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    {{-- Navbar Start --}}
    @include('customer.partials.navbar')
    {{-- Navbar End --}}
    {{-- Section Tracking Search Start --}}
    <div class="container-fluid hero padd-t">
      <div class="container">
        <div class="tracking-header">
          <h2 class="text-white sub-track-title">Track Orders<i class="fa-brands fa-searchengin fa-xl ms-3" style="color: #ffffff;"></i></h2>
          <p class="mt-3 text-white sub-track-title-p">track your screen printing order via our track orders feature, this feature allows you to continue monitoring the progress of your order until it is completed later</p>
        </div>
        <form action="">
          <div class="input-group pb-5">
            <input type="text" class="form-control" placeholder="Enter your order code" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button class="input-group-text" id="basic-addon2">Track now</button>
          </div>
        </form>
        <div class="pb-5">
          {{-- <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Order Code</th>
                <th scope="col">Order Name</th>
                <th scope="col">Order Date</th>
                <th scope="col">Order Address</th>
                <th scope="col">Quantity</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Status Order</th>
                <th scope="col">Progres Order</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table> --}}
        </div>
      </div>
    </div>
    {{-- Section End --}}
    {{-- Section Info Tracking Start --}}
    <div class="container-fluid hero-2 padd-t">
      <div class="container">
        <h3 class="text-white text-center title-feat-track">Find out more about the order progress<br>tracking feature</h3>
      </div>
      <div class="container padd-t">
        <div class="row">
          <div class="col-md-6">
            <h4 class="text-white">The order progress tracking feature is</h4>
            <p class="text-white">The order progress tracking feature is a feature that is used to detect and view your order activity to what extent it has been produced by the manufacturer. With this feature you can know the progress in the form of percentage (%) of making your screen printing order. And with this feature you no longer need to worry about the progress of your order.</p>
          </div>
          <div class="col-md-6">
            <h4 class="text-white">How do I track the progress of my order?</h4>
            <p class="text-white">How do you track your order progress? You don't need to worry, here we will help you to track the progress of your order. First, prepare your order code (see the order code in the email that was sent by HangSiji). Second, enter the order code in the track order input above, make sure the order code really matches. If you have completed the last step, click the "track now" button, and wait a moment then your order progress data will appear.</p>
          </div>
        </div>
      </div>
    </div>
    {{-- Section End --}}
    {{-- Section 6 Start (Footer)--}}
    @include('customer.partials.footer')
    {{-- Section 6 End --}}
    
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
</body>
</html>