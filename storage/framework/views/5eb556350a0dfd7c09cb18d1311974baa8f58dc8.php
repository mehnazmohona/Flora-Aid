<?php $__env->startSection('content'); ?>

    <!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <!-- Hero Slider-->
      <div class="owl-carousel owl-theme hero-slider">
        <div style="background: url(<?php echo e(asset('userInterface/img/hero-bg.jpg')); ?> );" class="item d-flex align-items-center has-pattern">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 text-white">
                <h1>Shop</h1>
                <p>Buy Your Need Product.</p>
                <br>
                <br>
                <ul class="lead">
                </ul><a href="<?php echo e(url('products')); ?>" class="btn btn-template wide shop-now">Shop Now<i class="icon-bag"> </i></a>
              </div>
            </div>
          </div>
        </div>
        <div style="background: url(<?php echo e(asset('userInterface/img/hero-bg-2.jpg')); ?>);" class="item d-flex align-items-center has-pattern">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 text-white">
                <h1>Sell</h1>
                <p>Sell Your Product.</p>
                <br>
                <br>
                <a href="<?php echo e(url('products')); ?>" class="btn btn-template wide shop-now">Shop Now<i class="icon-bag">  </i></a>
              </div>
            </div>
          </div>
        </div>
        <div style="background: url(<?php echo e(asset('userInterface/img/hero-bg-3.jpg')); ?>);" class="item d-flex align-items-center has-pattern">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 text-white">
                <h1>Share</h1>
                <p>Share Your Product with others.</p>
                <br>
                <br>
                <a href="<?php echo e(url('products')); ?>" class="btn btn-template wide shop-now">Shop Now<i class="icon-bag"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section-->
    <section class="categories">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Top for this month</small>Our Featured Company</h2>
        </header>
        <div class="row text-left">
          <div class="col-lg-4"><a href="<?php echo e(url('search?search=bcic')); ?>">
              <div style="background-image: url(<?php echo e(asset('userInterface/img/banner-1.jpg')); ?>);" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Top One</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="<?php echo e(url('search?search=bcic')); ?>">
              <div style="background-image: url(<?php echo e(asset('userInterface/img/banner-2.jpg')); ?> );" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Top Two</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="<?php echo e(url('search?search=bcic')); ?>">
              <div style="background-image: url(<?php echo e(asset('userInterface/img/banner-3.jpg')); ?> );" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Top Three</h3><span>New Collection</span>
                </div>
              </div></a></div>
        </div>
      </div>
    </section>
    <!-- Men's Collection -->
    <section class="men-collection gray-bg">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Gardener's Choice</small>New Collections</h2>
        </header>
        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
          <!-- item-->
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="<?php echo asset('userInterface/product/'.$product->image); ?>" alt="product" class="img-fluid">
                

                 <?php echo $__env->make('layouts.cart-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


              </div>
              <div class="title"><small class="text-muted">Type:<?php echo e($product->productType); ?></small> <br> <small class="text-muted">Mobile:<?php echo e($product->phone); ?></small><a href="<?php echo e(url('/products-details',$product->id)); ?>">
                      <h3 class="h6 text-uppercase no-margin-bottom"><?php echo e($product->productName); ?></h3></a><span class="price text-muted"><?php echo e($product->price); ?> Taka</span></div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
    <!-- Divider Section-->
    <?php if(auth()->guard()->guest()): ?>
    <section style="background: url(<?php echo e(asset('userInterface/img/divider-bg.jpg')); ?> );" class="divider">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6">
            <p>Environment Creation Collection</p>
            <h2 class="h1 text-uppercase no-margin">Sale | Buy | Share</h2>
            <p>Join With Us...</p><a href="<?php echo e(url('/login')); ?>" class="btn btn-template wide shop-now">Join Now<i class="icon-profile"></i></a>
          </div>
        </div>
      </div>
    </section>
     <?php else: ?>
     <section style="background: url(<?php echo e(asset('userInterface/img/divider-bg.jpg')); ?> );" class="divider">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6">
            <p><?php echo e(Auth::user()->name); ?></p>
            <em>if you face any kind of problem for using this platform.Please <a href="<?php echo e(url('/contact')); ?>">Connect</a> with us.</em>
          </div>
        </div>
      </div>
    </section>
     <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/welcome.blade.php ENDPATH**/ ?>