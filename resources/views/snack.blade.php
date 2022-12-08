@extends('/base_pelanggan')

<!-- Page Header Start -->
<div class="page-header mb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Food Menu</h2>
      </div>
      <div class="col-12">
        <a href="">Home</a>
        <a href="">Menu</a>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->
<hr>

<div class="container">
  <div class="row align-items-center">
    <!-- Awal slot produk -->

    <!-- Pemisah per produk -->
    @foreach($snacks as $snack)
    <div class="col-md-6 p-2 ">
      <div class="hvnb">
        <div class="list-group shadow-sm">
          <div class="list-group-item gambar-produk"></div>
          <div class="list-group-item">
            <img src="{{ asset('img/'.$snack->image) }}" alt="">

            <h5 class="card-text ">{{$snack->name}}</h5>
            <div class="mb-2">
              <h6 class="active text-website text-warning">Rp {{$snack->price}}</h6>
            </div>

          </div>

        </div>
        <form method="POST" action="{{ route('add_to_cart') }}">
          @csrf
          <input type="hidden" name="id" value="{{$snack->id}}">
          <input type="hidden" name="name" value="{{$snack->name}}">
          <input type="hidden" name="price" value="{{$snack->price}}">
          <input type="hidden" name="image" value="{{$snack->image}}">

          <button type="submit" class="list-group-item btn-outline-success w-full h-full">
            ADD TO CART
          </button>
        </form>
      </div>
    </div>
    @endforeach
    <!-- Pemisah per produk -->

    <!-- Pemisah per produk -->

    <!-- Pemisah per produk -->

    <!-- Akhir slot produk -->
  </div>
</div>
</hr>
</div>
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