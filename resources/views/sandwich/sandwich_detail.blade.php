@extends('/base_pelanggan')
<!-- Page Header Start -->
<div class="page-header mb-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Sandwich Menu</h2>
			</div>
			<div class="col-12">
				<a href="">Home</a>
				<a href="">Menu</a>
			</div>
		</div>
	</div>
</div>
<!-- Page Header End -->

<div class="container my-5">
	<div class="row mb-4">
		<div class="col-sm-12 col-lg-12">
			<div class="card card-body shadow-sm">
				<h4 class="text-website ">
					Choose it yourself
				</h4>
				<hr>

				<form action="/sandwich" method="POST">
					@csrf
					@method('post')
					<div class="md:flex md:items-center mb-3">
						<div class="md:w-1/3">
							<label class="block text-gray-500 text-xl font-extrabold md:text-left mb-1 md:mb-0 pr-12" for="inline-full-name">
								Sandwich
							</label>
						</div>
						<div class="md:w-screen">
							<ul class="w-full grid grid-cols-3">
								<li>
									<input id="vd" type="radio" value="1" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="vd" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Veggie Delite</label>
									</label>
								</li>
								<li>
									<input id="si" type="radio" value="2" name="sandwich" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="si" class="flex cursor-pointer  bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Spicy Italian</label>
									</label>
								</li>
								<li>
									<input id="ct" type="radio" value="3" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="ct" class="flex cursor-pointer rounded-r  bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Chicken Teriyaki</label>
									</label>
								</li>
								<li>
									<input id="cs" type="radio" value="4" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="cs" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Chicken Slice</label>
									</label>
								</li>
								<li>
									<input id="tm" type="radio" value="5" name="sandwich" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="tm" class="flex cursor-pointer  bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Tuna Mayo</label>
									</label>
								</li>
								<li>
									<input id="ib" type="radio" value="6" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="ib" class="flex cursor-pointer rounded-r  bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Italian B.M.T</label>
									</label>
								</li>
								<li>
									<input id="em" type="radio" value="7" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="em" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Egg Mayo</label>
									</label>
								</li>
								<li>
									<input id="sc" type="radio" value="8" name="sandwich" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="sc" class="flex cursor-pointer  bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Steak & Cheese</label>
									</label>
								</li>
								<li>
									<input id="bc" type="radio" value="9" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="bc" class="flex cursor-pointer rounded-r  bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">BBQ Chicken</label>
									</label>
								</li>
								<li>
									<input id="rc" type="radio" value="10" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="rc" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Roast Chicken</label>
									</label>
								</li>
								<li>
									<input id="rb" type="radio" value="11" name="sandwich" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="rb" class="flex cursor-pointer  bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Roast Beef</label>
									</label>
								</li>
								<li>
									<input id="sa" type="radio" value="12" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="sa" class="flex cursor-pointer rounded-r  bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Shrimp Avocado</label>
									</label>
								</li>
								<li>
									<input id="mm" type="radio" value="13" name="sandwich" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="mm" class="flex cursor-pointer rounded-r  bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Meatball Marinara</label>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="md:flex md:items-center mb-3">
						<div class="md:w-1/3">
							<label class="block text-gray-500 text-xl font-extrabold md:text-left mb-1 md:mb-0 pr-12" for="inline-full-name">
								Bread
							</label>
						</div>
						<div class="md:w-screen">
							<ul class="w-full grid grid-cols-3">
								<li>
									<input id="wheat" type="radio" value="1" name="bread" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="wheat" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Wheat</label>
									</label>
								</li>
								<li>
									<input id="italian-bread" type="radio" value="2" name="bread" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="italian-bread" class="flex cursor-pointer  bg-gray-200 justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Italian Bread</label>
									</label>
								</li>
								<li>
									<input id="honey-oat" type="radio" value="3" name="bread" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="honey-oat" class="flex cursor-pointer rounded-r  bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Honey Oat</label>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="md:flex md:items-center mb-3">
						<div class="md:w-1/3">
							<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-12" for="inline-full-name">
								Size
							</label>
						</div>
						<div class="md:w-screen">
							<ul class="w-full grid grid-cols-2">
								<li>
									<input id="6-inch" type="radio" value="1" name="size" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="6-inch" class="flex cursor-pointer rounded-l bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">6 Inch</label>
									</label>
								</li>
								<li>
									<input id="footlong" type="radio" value="2" name="size" class="peer opacity-0 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
									<label for="footlong" class="flex cursor-pointer  bg-gray-200 rounded-r justify-center items-center text-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Footlong</label>
									</label>
								</li>

							</ul>
						</div>
					</div>
					<div class="md:flex md:items-center mb-3">
						<div class="md:w-1/3">
							<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-[45px]" for="inline-full-name">
								Extras
							</label>
						</div>
						<div class="md:w-screen">
							<ul class="grid gap-4 w-full md:grid-cols-3 ">
								<li>
									<input id="double-meat" type="checkbox" value="1" name="extras[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="double-meat" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Double Meat</label>
									</label>
								</li>
								<li>
									<input id="extra-cheese" type="checkbox" value="2" name="extras[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="extra-cheese" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Extra Cheese</label>
									</label>
								</li>
								<li>
									<input id="no-extras" type="checkbox" value="3" name="extras[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="no-extras" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">No Extras</label>
									</label>
								</li>
							</ul>
						</div>
					</div>

					<div class="md:flex md:items-center mb-3">
						<div class="md:w-1/3">
							<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-[35px]" for="inline-full-name">
								Veggies
							</label>
						</div>
						<div class="md:w-screen">
							<ul class="grid gap-x-4 gap-y-1 grid-cols-4 ">
								<li>
									<input id="lettuce" type="checkbox" value="1" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="lettuce" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Lettuce</label>
									</label>
								</li>
								<li>
									<input id="tomatoes" type="checkbox" value="2" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="tomatoes" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Tomatoes</label>
									</label>
								</li>
								<li>
									<input id="cucumbers" type="checkbox" value="3" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="cucumbers" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Cucumbers</label>
									</label>
								</li>
								<li>
									<input id="pickles" type="checkbox" value="4" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="pickles" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Pickles</label>
									</label>
								</li>
								<li>
									<input id="green-peppers" type="checkbox" value="5" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="green-peppers" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Green Peppers</label>
									</label>
								</li>
								<li>
									<input id="olives" type="checkbox" value="6" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="olives" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Olives</label>
									</label>
								</li>
								<li>
									<input id="white-onions" type="checkbox" value="7" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="white-onions" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">White Onions</label>
									</label>
								</li>
								<li>
									<input id="no-veggies" type="checkbox" value="8" name="veggies[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="no-veggies" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">No Veggies</label>
									</label>
								</li>

							</ul>
						</div>
					</div>

					<div class="md:flex md:items-center mb-1">
						<div class="md:w-1/3">
							<label class="block text-gray-500 text-xl font-bold md:text-left mb-1 md:mb-0 pr-[35px]" for="inline-full-name">
								Sauces
							</label>
						</div>
						<div class="md:w-screen">
							<ul class="grid gap-x-4 gap-y-1 grid-cols-4 ">
								<li>
									<input id="honey-mustard" type="checkbox" value="1" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="honey-mustard" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Honey Mustard</label>
									</label>
								</li>
								<li>
									<input id="sweet-onion" type="checkbox" value="2" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="sweet-onion" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Sweet Onion</label>
									</label>
								</li>
								<li>
									<input id="chipotle" type="checkbox" value="3" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="chipotle" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900 text-center">Chipotle Southwest</label>
									</label>
								</li>
								<li>
									<input id="mayonaise" type="checkbox" value="4" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="mayonaise" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Mayonaise</label>
									</label>
								</li>
								<li>
									<input id="bbq" type="checkbox" value="5" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="bbq" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">BBQ</label>
									</label>
								</li>
								<li>
									<input id="tomato-sauces" type="checkbox" value="6" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="tomato-sauces" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Tomato</label>
									</label>
								</li>
								<li>
									<input id="thousand-island-dressing" type="checkbox" value="7" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="thousand-island-dressing" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-[#719a0a] peer-checked:text-white text-[14px] text-sm font-medium text-gray-900 text-center">Thousand Island Dressing</label>
									</label>
								</li>
								<li>
									<input id="hot-chilli" type="checkbox" value="8" name="sauces[]" class="peer opacity-0  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
									<label for="hot-chilli" class="flex cursor-pointer rounded-lg bg-gray-200 justify-center items-center h-10 w-full peer-checked:bg-white peer-checked:text-white text-[14px] text-sm font-medium text-gray-900">Hot Chilli</label>
									</label>
								</li>

							</ul>
						</div>
					</div>



					<hr>
					<div class="grid grid-cols-2 flex ">
						<div class="col-sm-12 col-lg-8">
						</div>
						<div class="w-full">
							<button type="submit" class="list-group-item btn-outline-success pl-3">
								Add to Cart
							</button>
						</div>

					</div>
				</form>

			</div>
			<hr>
		</div>
	</div>
</div>