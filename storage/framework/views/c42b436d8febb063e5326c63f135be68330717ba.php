<?php $__env->startSection('content'); ?>

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shopping cart</h1><p class="lead text-muted">You currently have 3 items in your shopping cart</p>
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
              <div class="item">
                <div class="row d-flex align-items-center">
                  <div class="col-5">
                    <div class="d-flex align-items-center"><img src="<?php echo e(asset('userInterface/img/shirt.png')); ?>" alt="..." class="img-fluid">
                      <div class="title"><a href="<?php echo e(url('products-details')); ?>">
                          <h5>Loose Oversised Shirt</h5><span class="text-muted">Size: Large</span></a></div>
                    </div>
                  </div>
                  <div class="col-2"><span>$65.00</span></div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="quantity d-flex align-items-center">
                        <div class="dec-btn">-</div>
                        <input type="text" value="4" class="quantity-no">
                        <div class="inc-btn">+</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-2"><span>$325.00</span></div>
                  <div class="col-1 text-center"><i class="delete fa fa-trash"></i></div>
                </div>
              </div>
              <!-- Product-->
              <div class="item">
                <div class="row d-flex align-items-center">
                  <div class="col-5">
                    <div class="d-flex align-items-center"><img src="<?php echo e(asset('userInterface/img/shirt-black.png')); ?>" alt="..." class="img-fluid">
                      <div class="title"><a href="<?php echo e(url('/products-details')); ?>">
                          <h5>Loose Oversised Shirt</h5><span class="text-muted">Size: Medium</span></a></div>
                    </div>
                  </div>
                  <div class="col-2"><span>$55.00</span></div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="quantity d-flex align-items-center">
                        <div class="dec-btn">-</div>
                        <input type="text" value="3" class="quantity-no">
                        <div class="inc-btn">+</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-2"><span>$165.00</span></div>
                  <div class="col-1 text-center"><i class="delete fa fa-trash"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="<?php echo e(url('products')); ?>" class="btn btn-template-outlined wide">Continue Shopping</a>
      </div>
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
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/cart.blade.php ENDPATH**/ ?>