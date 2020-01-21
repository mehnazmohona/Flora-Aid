<?php $__env->startSection('content'); ?>

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Your orders</h1><p class="lead">Your orders in one place.</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
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
                  <th>Order ID.</th>
                  <th>Customer Name</th>
                  <th>Phone</th>
                  <th>Product Name</th>
                  <th>Product Quantity</th>
                  <th>Total</th>
                  <?php if(Auth::user()->type == 'Retailer'): ?>
                  <th>Action</th>
                  <?php endif; ?>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                  <td><?php echo e($order->order_id); ?></td>
                  <td><?php echo e($order->name); ?></td>
                  <td><?php echo e($order->phone_no); ?></td>
                  <td><?php echo e($order->productName); ?></td>
                  <td><?php echo e($order->product_quantity); ?></td>
                  <td>
                    <?php
                      $price = $order->price;
                      $totalPrice = $price*$order->product_quantity;
                    ?>
                    <?php echo e($totalPrice); ?>

                   BDT</td>
                   <?php if(Auth::user()->type == 'Retailer'): ?>
                   <!-- <?php echo e(url('/order')); ?> -->
                  <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                  <?php endif; ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/orders.blade.php ENDPATH**/ ?>