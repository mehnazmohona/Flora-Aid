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
    <!-- Checkout Forms-->
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
              <h3>Products Order Details For Confirmation</h3>
            <div class="tab-content">
              <div id="address" class="active tab-block">
                <form action="#">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="firstname" class="form-label">First Name</label>
                      <input id="firstname" type="text" name="first-name" placeholder="Enter you first name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="lastname" class="form-label">Last Name</label>
                      <input id="lastname" type="text" name="last-name" placeholder="Enter your last name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email" class="form-label">Email Address</label>
                      <input id="email" type="email" name="email" placeholder="enter your email address" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="street" class="form-label">Street</label>
                      <input id="street" type="text" name="address" placeholder="Your street name" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="city" class="form-label">City</label>
                      <input id="city" type="text" name="city" placeholder="Your city" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="zip" class="form-label">ZIP</label>
                      <input id="zip" type="text" name="zip" placeholder="ZIP code" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="state" class="form-label">State</label>
                      <input id="state" type="text" name="state" placeholder="Your state" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="country" class="form-label">Country</label>
                      <input id="country" type="text" name="country" placeholder="Your country" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phone-number" class="form-label">Phone Number</label>
                      <input id="phone-number" type="tel" name="phone-number" placeholder="Your phone number" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="company" class="form-label">Company</label>
                      <input id="company" type="text" name="company" placeholder="Your company name" class="form-control">
                    </div>
                    <div class="form-group col-12 mt-3 ml-3">
                      <h4>This time we only accept Cash on Delivery</h4>
                    </div>
                  </div>
                  <!-- /Invoice Address-->
                  <div class="CTAs d-flex justify-content-between flex-column flex-lg-row"><a href="<?php echo e(url('/order-confirm')); ?>" class="btn btn-template wide next">Order Confirm<i class="fa fa-angle-right"></i></a></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="block-body order-summary">
              <h6 class="text-uppercase">Order Summary</h6>
              <p>Shipping and additional costs are calculated based on values you have entered</p>
              <ul class="order-menu list-unstyled">
                <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>$390.00</strong></li>
                <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>$10.00</strong></li>
                <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">$400.00</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/checkout.blade.php ENDPATH**/ ?>