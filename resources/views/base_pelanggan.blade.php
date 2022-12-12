<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Subway Delivery</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free Website Template" name="keywords" />
  <meta content="Free Website Template" name="description" />
  @vite('resources/css/app.css')

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet" />

  <!-- CSS Libraries -->
  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>
      
<body>              

  <!-- Nav Bar Start -->
  <div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
      <a href="{{url('/')}}" class="navbar-brand">Sub<span>Way </span> Sura<span>baya</span></a>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
          <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
          <a href="{{url('/feature')}}" class="nav-item nav-link">Feature</a>
          <a href="{{url('/menu')}}" class="nav-item nav-link">Order</a>
          <a href="{{url('/account')}}" class="nav-item nav-link">Account</a>
          <a href="{{url('/history')}}" class="nav-item nav-link">History</a>
          <a href="{{url('/cart')}}" class="nav-item nav-link">Cart</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Nav Bar End -->

  <!-- Footer Start -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="row">
            <div class="col-md-6">
              <div class="footer-contact">
                <h2>Our Address</h2>
                <p>
                  <i class="fa fa-map-marker-alt"></i>Gedung Kuliah Bersama
                  Universitas Airlangga, Surabaya
                </p>
                <p><i class="fa fa-phone-alt"></i>+62 812345789</p>
                <p><i class="fa fa-envelope"></i>subway@gmail.com</p>
                <div class="footer-social">
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                  <a href=""><i class="fab fa-youtube"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-link">
                <h2>Quick Links</h2>
                <a href="">Terms of use</a>
                <a href="">Privacy policy</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <p>
          Copyright &copy; <a href="#">Kelompok 9 TSD UNAIR</a>, All Right
          Reserved.
        </p>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>