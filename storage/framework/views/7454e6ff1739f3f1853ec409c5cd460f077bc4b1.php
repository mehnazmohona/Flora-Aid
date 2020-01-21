
<div class="hover-overlay d-flex align-items-center justify-content-center">
	<div class="CTA d-flex align-items-center justify-content-center">
		<form action="<?php echo e(route('carts.store')); ?>" method="post">
		  <?php echo csrf_field(); ?>
		  <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
		  <button type="submit" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
		</form>

		<!-- <a href="#" class="add-to-cart">
			<i class="fa fa-shopping-cart"></i>
		</a> -->

		<a href="<?php echo e(url('/products-details',$product->id)); ?>" class="visit-product active">
			<i class="icon-search"></i>View</a>
	</div>
</div><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/layouts/cart-button.blade.php ENDPATH**/ ?>