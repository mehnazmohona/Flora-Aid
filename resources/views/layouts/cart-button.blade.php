
<div class="hover-overlay d-flex align-items-center justify-content-center">
	<div class="CTA d-flex align-items-center justify-content-center">
		<form action="{{ route('carts.store') }}" method="post">
		  @csrf
		  <input type="hidden" name="product_id" value="{{ $product->id }}">
		  <button type="submit" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
		</form>

		<!-- <a href="#" class="add-to-cart">
			<i class="fa fa-shopping-cart"></i>
		</a> -->

		<a href="{{ url('/products-details',$product->id)}}" class="visit-product active">
			<i class="icon-search"></i>View</a>
	</div>
</div>