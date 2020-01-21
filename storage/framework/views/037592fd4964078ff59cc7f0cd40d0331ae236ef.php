<?php $__env->startSection('content'); ?>

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shopping cart</h1><p class="lead text-muted">You currently have <?php echo e(App\Cart::totalItems()); ?> items in your shopping cart</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Shopping cart</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Shopping Cart Section-->
    
    <section class="shopping-cart">
       <?php if(App\Cart::totalItems() > 0): ?>
      <div class="container">
        <div class="basket">
          <div class="basket-holder">
            <div class="basket-header">
              <div class="row">
                <div class="col-5">Product</div>
                <div class="col-2">Price</div>
                <div class="col-2">Quantity</div>
                <div class="col-2">Total</div>
                <div class="col-1 text-center">Remove</div>
              </div>
            </div>
            <div class="basket-body">
              <!-- Product-->
              <?php
              $total_price = 0;
              ?>
              <?php $__currentLoopData = App\Cart::totalCarts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="item">
                <div class="row d-flex align-items-center">
                  <div class="col-5">
                    <?php
                        $value = $cart->product_id; 

                        $title = DB::table('products')->where('id', $value)->get();

                        foreach($title as $t){
                          $RID = $t->retailerID;
                          $titleShow = $t->productName;
                          $priceShow = $t->price;
                          $productImage = $t->image;
                          $productType = $t->productType;
                        }

                     ?>

                    <div class="d-flex align-items-center"><img src="<?php echo asset('userInterface/product/'.$productImage); ?>" alt="..." class="img-fluid">

                      <div class="title"><a href="<?php echo e(url('products-details')); ?>">
                          <h5><?php echo e($titleShow); ?></h5><span class="text-muted">Type: <?php echo e($productType); ?></span> <br> <span class="text-muted">Retailer No: <?php echo e($RID); ?></span></a></div>
                    </div>
                  </div>
                  <div class="col-2"><span><?php echo e($priceShow); ?></span></div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="quantity d-flex align-items-center">
                        <form class="form-inline" action="<?php echo e(route('carts.update', $cart->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="dec-btn"><button type="submit" class="btn">-</button></div>
                        
                        <input type="number" name="product_quantity" value="<?php echo e($cart->product_quantity); ?>" class="quantity-no">
                        <div class="inc-btn"><button type="submit" class="btn">+</button></div>
                      </form>
                      </div>
                    </div>
                  </div>


                  <div class="col-2"><span>
                    <?php
                    $total_price += $priceShow * $cart->product_quantity;
                    ?>

                    <?php echo e($priceShow * $cart->product_quantity); ?> Taka</span></div>
                  <div class="col-1 text-center">
                    <form class="form-inline" action="<?php echo e(route('carts.delete', $cart->id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="cart_id" />
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>

                </div>
              </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="container">

        <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="<?php echo e(url('products')); ?>" class="btn btn-template-outlined wide">Continue Shopping</a>
        </div>

      </div>
       <?php endif; ?>
    </section>

    <!-- Order Details Section-->
    <section class="order-details no-padding-top"> 
      <div class="container">
        <div class="row">                         
          <!-- <div class="col-lg-6">
            <div class="block">
              <div class="block-header">
                <h6 class="text-uppercase">Order Summary</h6>
              </div>
              <div class="block-body">
                <p>Shipping and additional costs are calculated based on values you have entered.</p>
                <ul class="order-menu list-unstyled">
                  <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>$390.00</strong></li>
                  <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>$10.00</strong></li>
                  <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                  <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">$400.00</strong></li>
                </ul>
              </div>
            </div>
          </div> -->
          <div class="col-lg-12 text-center CTAs"><a href="<?php echo e(url('/checkout')); ?>" class="btn btn-template btn-lg wide">Proceed to checkout<i class="fa fa-long-arrow-right"></i></a></div>

        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/carts.blade.php ENDPATH**/ ?>