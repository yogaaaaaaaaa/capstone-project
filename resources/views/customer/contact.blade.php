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
    <link rel="stylesheet" href="{{asset('team-contact.css')}}">

    {{-- Animation Website --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
    @include('customer.partials.navbar')

    {{-- Section 1 Start --}}
    <section class="contact">
      <div class="content">
          <h2>Contact Us</h2>
          <p>Welcome to our "Contact Us"! We love hearing from you. Use the form below. We are ready to provide a quick response and help you as quickly as possible. Your every question or feedback means a lot to us!</p>
      </div>
      <div class="container">
          <div class="contacinfo">
              <div class="box">
                  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="text">
                      <h3>Address</h3>
                      <p>Jl. Umbul - Gunungsari, Sumbergondo<br> RT.1/RW.3, Salamrejo, Sumbergondo,Kec.<br> Glenmore, Kabupaten Banyuwangi, Jawa<br> Timur 68466<</p>
                  </div>
              </div>
              <div class="box">
                  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                  <div class="text">
                      <h3>Phone</h3>
                      <p>082357082325</p>
                  </div>
              </div>
              <div class="box">
                  <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                  <div class="text">
                      <h3>Email</h3>
                      <p>hongsiji@gmail.com</p>
                  </div>
              </div>
          </div>
          <div class="contactform">
              <form  id="myForm" onsubmit="submitForm(); return false;">
                  <h2>Send Message</h2>
                  <div class="inputbox">
                      <input type="text" name="" required="">
                      <span>Full Name</span>
                  </div>
                  <div class="inputbox">
                      <input type="text" name="" required="">
                      <span>Email</span>
                  </div>
                  <div class="inputbox">
                      <input type="text" name="" required="">
                      <span>Type your Message...</span>
                  </div>
                  <div class="inputbox">
                      <input type="submit" name="" value="send">
                  </div>
              </form>
              <div id="confirmationMessage" class="confirmationMessage">
                  Pesan Anda telah berhasil dikirim!
              </div>
          </div>
      </div>
  </section>
  <script>
  if (localStorage.getItem('formSubmitted')) {
      showSuccessAlert();
      document.getElementById('myForm').style.display = 'none';
      localStorage.removeItem('formSubmitted');
  }
  function submitForm() {
      showSuccessAlert();
      localStorage.setItem('formSubmitted', 'true');
  }
  function showSuccessAlert() {
      Swal.fire({
      icon: 'success',
      title: 'Pesan Terkirim!',
      text: 'Pesan Anda telah berhasil dikirim.',
      confirmButtonText: 'OK'
  }).then(() => {
  localStorage.removeItem('formSubmitted');
  location.reload();
});
}
</script>
</body>
</html>
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

      window.addEventListener('scroll', function() {
        var backToTopButton = document.querySelector('.back-to-top');
        if (window.scrollY > 300) { // Ubah nilai 300 sesuai dengan posisi scroll yang diinginkan
          backToTopButton.classList.add('show');
        } else {
          backToTopButton.classList.remove('show');
        }
      })

    </script>
</body>
</html>