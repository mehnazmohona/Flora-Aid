<?php $__env->startSection('content'); ?>


<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Checkout</h1><p class="lead">You currently have 1 item(s) in your basket</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  <div class='container margin-top-20 mb-3'>
    <div class="card card-body">
      <h2>Confirm Items</h2>
      <hr>
      <div class="row">
        <div class="col-md-7 border-right">
          

          <?php
          $totalPrice = 0;
          $total_price = 0;
          ?>

          <?php $__currentLoopData = App\Cart::totalCarts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
                    $value = $cart->product_id; 

                    $title = DB::table('products')->where('id', $value)->get();

                    foreach($title as $t){
                      $RID = $t->retailerID;
                      $titleShow = $t->productName;
                      $priceShow = $t->price;
                    }

                 ?>
            <p>
              <?php echo e($titleShow); ?> -
              <strong><?php echo e($priceShow); ?> taka </strong>
              - <?php echo e($cart->product_quantity); ?> item
            </p>
            <?php 
                $totalPrice = $priceShow*$cart->product_quantity;
                $total_price = $total_price+$totalPrice;
            ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-5">
          <p>Total Price : <strong><?php echo e($total_price); ?></strong> Taka</p>
          <p>Total Price with shipping cost: <strong><?php echo e($total_price + 50); ?></strong> Taka [Inside of Dhaka]</p>
          <p>Total Price with shipping cost: <strong><?php echo e($total_price + 150); ?></strong> Taka [Outside of Dhaka]</p>
        </div>
      </div>
      <p>
        <a href="<?php echo e(route('carts')); ?>">Change Cart items</a>
      </p>
    </div>
    <div class="card card-body mt-2 mb-4">
      <h2>Shipping Address</h2>

      <form method="POST" action="<?php echo e(route('checkouts.store')); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="retailerID" value="<?php echo e($RID); ?>">
        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">Reciever Name</label>

          <div class="col-md-6">
            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(Auth::check() ? Auth::user()->first_name.' '.Auth::user()->last_name : ''); ?>" required autofocus>

            <?php if($errors->has('name')): ?>
              <span class="invalid-feedback">
                <strong><?php echo e($errors->first('name')); ?></strong>
              </span>
            <?php endif; ?>
          </div>
        </div>


        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(Auth::check() ? Auth::user()->email : ''); ?>" required>

            <?php if($errors->has('email')): ?>
              <span class="invalid-feedback">
                <strong><?php echo e($errors->first('email')); ?></strong>
              </span>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone No</label>

          <div class="col-md-6">
            <input id="phone_no" type="text" class="form-control<?php echo e($errors->has('phone_no') ? ' is-invalid' : ''); ?>" name="phone_no" value="<?php echo e(Auth::check() ? Auth::user()->phone_no : ''); ?>" required>

            <?php if($errors->has('phone_no')): ?>
              <span class="invalid-feedback">
                <strong><?php echo e($errors->first('phone_no')); ?></strong>
              </span>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="message" class="col-md-4 col-form-label text-md-right">Additional Message (optional)</label>

          <div class="col-md-6">
            <textarea id="message" class="form-control<?php echo e($errors->has('message') ? ' is-invalid' : ''); ?>" rows="4" name="message" placeholder="Please Tell us if you need different types of Cube. Like Stiker less, Stiker etc from our prodcct description."></textarea>

            <?php if($errors->has('message')): ?>
              <span class="invalid-feedback">
                <strong><?php echo e($errors->first('message')); ?></strong>
              </span>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="shipping_address" class="col-md-4 col-form-label text-md-right">Shipping Address (*)</label>

          <div class="col-md-6">
            <textarea id="shipping_address" class="form-control<?php echo e($errors->has('shipping_address') ? ' is-invalid' : ''); ?>" rows="4" name="shipping_address"><?php echo e(Auth::check() ? Auth::user()->shipping_address : ''); ?></textarea>

            <?php if($errors->has('shipping_address')): ?>
              <span class="invalid-feedback">
                <strong><?php echo e($errors->first('shipping_address')); ?></strong>
              </span>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              Order Now
            </button>
          </div>
        </div>

      </div>


    </form>

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/checkouts.blade.php ENDPATH**/ ?>