<?php $__env->startSection('content'); ?>

 <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Category</h1><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<!-- Categories Section-->
    <section class="categories">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>All category</small>Our Featured Picks</h2>
        </header>
        <div class="row text-left">
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url(<?php echo e(asset('userInterface/img/banner-1.jpg')); ?> );" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Men's</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url(<?php echo e(asset('userInterface/img/banner-2.jpg')); ?> );" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Women's</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url(<?php echo e(asset('userInterface/img/banner-3.jpg')); ?> );" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Accessories</h3><span>Sale of 20%</span>
                </div>
              </div></a></div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/category.blade.php ENDPATH**/ ?>