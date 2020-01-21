<?php $__env->startSection('content'); ?>

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Search Product</h1><p class="lead text-muted">Your Search for "<?php echo e($search); ?>"</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <main>
      <div class="container">
        <div class="row">
          <!-- Grid -->
          <div class="products-grid col-12 sidebar-none">
            <div class="row">
              <!-- item-->
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center"><img src="<?php echo asset('userInterface/product/'.$product->image); ?>" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="<?php echo e(url('/products-details',$product->id)); ?>" class="visit-product active"><i class="icon-search"></i>View</a></div>
                    </div>
                    
                  </div>
                  <div class="title"><small class="text-muted">Type:<?php echo e($product->productType); ?></small> <br> <small class="text-muted">Mobile:<?php echo e($product->phone); ?></small><a href="<?php echo e(url('/products-details',$product->id)); ?>">
                      <h3 class="h6 text-uppercase no-margin-bottom"><?php echo e($product->productName); ?></h3></a><span class="price text-muted"><?php echo e($product->price); ?> Taka</span></div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <nav aria-label="page navigation example" class="d-flex justify-content-center">
              <ul class="pagination pagination-custom">
                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item"><a href="#" class="page-link active">1       </a></li>
                <li class="page-item"><a href="#" class="page-link">2       </a></li>
                <li class="page-item"><a href="#" class="page-link">3       </a></li>
                <li class="page-item"><a href="#" class="page-link">4       </a></li>
                <li class="page-item"><a href="#" class="page-link">5 </a></li>
                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
              </ul>
            </nav>
          </div>
          <!-- / Grid End-->
        </div>
      </div>
    </main>
    <!-- Overview Popup    -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/search.blade.php ENDPATH**/ ?>