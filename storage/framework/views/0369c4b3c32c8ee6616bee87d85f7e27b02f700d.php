<?php $__env->startSection('content'); ?>

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Your Products</h1><p class="lead">All of your products.</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Your Products</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-small">
      <div class="container">
        <div class="row">
          <!-- Customer Sidebar-->
          <div class="customer-sidebar col-xl-3 col-lg-4 mb-md-5">
            <?php echo $__env->make('layouts.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
          </div>
          <div class="col-lg-8 col-xl-9 pl-lg-3">
            <table class="table table-hover table-responsive-md">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Product Type</th>
                  <th>Product Price</th>
                  <th>Product Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $ownProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th>P-<?php echo e($product->id); ?></th>
                  <td><?php echo e($product->productName); ?></td>
                  <td><?php echo e($product->productType); ?></td>
                  <td><?php echo e($product->price); ?></td>
                  <td><img src="<?php echo asset('userInterface/product/'.$product->image); ?>" alt="" style="height: 40px;"></td>
                  <td>
                    
                  <a href="#deleteModal<?php echo e($product->id); ?>" data-toggle="modal" class="btn btn-danger">Delete</a></td>

                  </td>
                </tr>

                <!--delete data modal-->
                <div class="modal fade" id="deleteModal<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          
                          <div class="modal-body">
                            <form action="<?php echo route('store-product-delete', $product->id); ?>"  method="post">
                              <?php echo csrf_field(); ?>
                              <button type="submit" class="btn btn-danger">Permanent Delete</button>
                            </form>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--data modal-->

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/own-product.blade.php ENDPATH**/ ?>