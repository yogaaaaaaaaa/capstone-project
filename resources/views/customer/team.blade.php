<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
    @include('customer.partials.navbar')
    {{-- Navbar End --}}

    {{-- Section 1 Start --}}
    <section class="team">
      <div class="teamwork">
        <h2>Our Team</h2>
      </div>
      <div class="team-members">
        <div class="team-member">
          <!-- Member 1 Content -->
          <img src="assets/img/1.jpeg" alt="Team Member 1">
          <div class="team-member-info">
            <h5>Mohammad Rendy Firmansyah</h5>
            <p>Developer</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="team-member">
          <!-- Member 2 Content -->
          <img src="assets/img/2.jpeg" alt="Team Member 2">
          <div class="team-member-info">
            <h5>Ridwan Yoga Permana</h5>
            <p>Developer</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="team-member">
          <!-- Member 3 Content -->
          <img src="assets/img/7.jpg" alt="Team Member 3">
          <div class="team-member-info">
            <h5>Rio Nanda Prasetyo</h5>
            <p>Developer</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="team-member">
          <!-- Member 4 Content -->
          <img src="assets/img/5.jpg" alt="Team Member 4">
          <div class="team-member-info">
            <h5>Rafi Humam Nugraha</h5>
            <p>Developer</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="team-member">
          <!-- Member 5 Content -->
          <img src="assets/img/6.jpg" alt="Team Member 5">
          <div class="team-member-info">
            <h5>Muhammad Iqbal Gobel</h5>
            <p>Developer</p>
            <div class="social-icons">
              <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Section 6 End --}}

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Animation Website --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>