<div class="customer-profile"><a href="#" class="d-inline-block"><img src="<?php echo e(asset('userInterface/img/person-3.jpg')); ?>" class="img-fluid rounded-circle customer-image"></a>
  <h5><?php echo e(Auth::user()->name); ?></h5>
  <p class="text-muted text-small"><?php echo e(Auth::user()->type); ?></p>
</div>
<nav class="list-group customer-nav">
	<a href="<?php echo e(url('/orders')); ?>" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-bag"></span>Orders</span></a>
	
	<a href="<?php echo e(url('/home')); ?>" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Profile</span></a>
	 		<?php if(Auth::user()): ?>
                    
            <?php if(Auth::user()->type == 'Retailer'): ?>
	<a href="<?php echo e(url('/own-product')); ?>" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-map"></span>Product View</span></a>
	
	<a href="<?php echo e(url('/store-product')); ?>" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-map"></span>Store Product</span></a>
			<?php endif; ?>
			<?php endif; ?>
	<a class="list-group-item d-flex justify-content-between align-items-center" href="<?php echo e(route('logout')); ?>"
 onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
  <?php echo e(__('Logout')); ?>

</a>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
  <?php echo csrf_field(); ?>
</form>

</nav><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/layouts/account-nav.blade.php ENDPATH**/ ?>