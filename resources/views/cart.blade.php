@extends('/base_pelanggan')
<!--
    - custom css link
  -->
<link rel="stylesheet" href="css/style1.css">

<!--
    - google font link
  -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+3:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
</head>

<!-- Page Header Start -->
<div class="page-header">
  <div class="row">
    <div class="col-12">
      <h2>Shopping Cart</h2>
    </div>
  </div>
</div>
<!-- Page Header End -->

<div class="container">
  <!--
      - checkout section
      -->
  <section class="checkout w-full">
    <h2 class="section-heading">Payment Details</h2>

    <div class="payment-form">
      <div class="payment-method">
        <button class="method">
          <span>E-Money</span>

          <input class="checkmark" type="radio" name="pembayaran" value="e_money" />
        </button>
        <button class="method">
          <span>Cash on Delivery</span>
          <input class="checkmark" type="radio" name="pembayaran" value="cod" />
        </button>
      </div>
    </div>
  </section>

  <section class="checkout w-full">
    <h2 class="section-heading">Address</h2>

    <div class="payment-form">
      <div class="payment-method">
        <button class="method">
          <ion-icon name="card"></ion-icon>

          <span>Alamat 1</span>

          <input class="checkmark" type="radio">
        </button>


        <button class="method">
          <span>Alamat 2</span>

          <input class="checkmark" type="radio">
        </button>


        <button class="method">
          <span>Alamat 3 </span>
          <input class="checkmark" type="radio">
        </button>
      </div>
    </div>

    <button class="btn btn-primary">
      <b>Pay</b> $ <span id="payAmount">2.15</span>
    </button>

  </section>

  <!--
        - cart section
      -->

  <section class="cart">
    <div class="cart-item-box">
      <h2 class="section-heading">Order Summary</h2>

      <div class="product-card">

        <div class="card">
          <div class="detail grid grid-cols-4 w-full justify-center">
            <img style="width: 75px; height: 75px" src="{{asset('img/aqua.png')}}">

            <h4 class="product-name">Green Tomatoes 1 Kilo</h4>

            <div class="wrapper">
              <div class="product-qty">
                <button id="decrement">
                  <ion-icon name="remove-outline"></ion-icon>
                </button>

                <span id="quantity">1</span>

                <button id="increment">
                  <ion-icon name="add-outline"></ion-icon>
                </button>
              </div>

            </div>
            <div class="price">$ <span id="price">1.25</span></div>

          </div>
          

          <button class="product-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>
      </div>


      <div class="amount">
        <div class="subtotal">
          <span>Subtotal</span>
          <span>$ <span id="subtotal">2.05</span></span>
        </div>

        <div class="tax">
          <span>Tax</span> <span>$ <span id="tax">0.10</span></span>
        </div>

        <div class="shipping">
          <span>Shipping</span>
          <span>$ <span id="shipping">0.00</span></span>
        </div>

        <div class="total">
          <span>Total</span> <span>$ <span id="total">2.15</span></span>
        </div>
      </div>
    </div>
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
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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