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
		@foreach($sandwiches as $sandwich)
		<div class="col-md-6 p-2 ">
			<div class="hvnb">
				<div class="list-group shadow-sm">
					<div class="list-group-item gambar-produk"></div>
					<div class="list-group-item">
						<img src="{{ asset('img/'.$sandwich->image) }}" alt="">

						<h5 class="card-text ">{{$sandwich->name}}</h5>
						<div class="mb-2">
							<h6 class="active text-website text-warning">Rp {{$sandwich->price}}</h6>
						</div>

					</div>

				</div>
				<form method="POST" action="{{ route('add_to_cart') }}">
					@csrf
					<input type="hidden" name="id" value="{{$sandwich->id}}">
					<input type="hidden" name="name" value="{{$sandwich->name}}">
					<input type="hidden" name="price" value="{{$sandwich->price}}">
					<input type="hidden" name="image" value="{{$sandwich->image}}">

					<button type="submit" class="list-group-item btn-outline-success w-full h-full">
						ADD TO CART
					</button>
				</form>
			</div>
		</div>
		@endforeach

		<!-- Pemisah per produk -->


		<!-- Pemisah per produk -->

		<!-- Akhir slot produk -->
	</div>
</div>