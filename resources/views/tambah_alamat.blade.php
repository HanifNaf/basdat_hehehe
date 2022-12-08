@extends('/base')
<!--
    - custom css link
  -->
  <link rel="stylesheet" href="css/style1.css">

  <!--
    - google font link
  -->
  <link
    href="https://fonts.googleapis.com/css?family=Source+Sans+3:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
    rel="stylesheet" />
</head>

    <!-- Page Header Start -->
    <div class="page-header">
      <div class="row">
        <div class="col-12">
          <h2>Add Address</h2>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="item-flex">
      <!--
      - checkout section
      -->
      <section class="checkout">
          <h2 class="section-heading">Delivery Address</h2>
          <form action="#">
            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default">Alamat</label>
              <input
                type="text"
                name="cardholder-name"
                id="cardholder-name"
                class="input-default"
              />
            </div>

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default"
                >Provinsi</label
              >
              <input
                type="text"
                name="cardholder-name"
                id="cardholder-name"
                class="input-default"
              />
            </div>

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default">Kota</label>
              <input
                type="text"
                name="cardholder-name"
                id="cardholder-name"
                class="input-default"
              />
            </div>

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default"
                >Kecamatan</label
              >
              <input
                type="text"
                name="cardholder-name"
                id="cardholder-name"
                class="input-default"
              />
            </div>

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default"
                >Kelurahan</label
              >
              <input
                type="text"
                name="cardholder-name"
                id="cardholder-name"
                class="input-default"
              />
            </div>

            <div class="cardholder-name">
              <label for="cardholder-name" class="label-default"
                >Kode Pos</label
              >
              <input
                type="text"
                name="cardholder-name"
                id="cardholder-name"
                class="input-default"
              />
            </div>
          </form>
        </div>

        <button class="btn btn-primary">
          <b>Pay</b> $ <span id="payAmount">2.15</span>
        </button>
      </section>
    </div>

    <!--
    - custom js link
  -->
  <script src="js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--
    - custom js link
  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="resources/js/script.js"></script>

    <!--
    - ionicon link
    -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="resources/zjs/main.js"></script>
  </body>
</html>
