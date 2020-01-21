<?php $__env->startSection('content'); ?>


<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h5><?php echo e(Auth::user()->name); ?></h5>
            <h1>Your profile</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Your profile</li>
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
            <div class="block-header mb-5">
              <h5><?php echo e(Auth::User()->type); ?> Information</h5>
            </div>
            <h5>Name:   <?php echo e(Auth::user()->name); ?></h5>
            <h5>Email:   <?php echo e(Auth::User()->email); ?></h5>
            <br>
            <br>
            <div class="block-header mb-5">
              <h5>Personal details</h5>
            </div>

            <?php if(Auth::user()): ?>
                    
            <?php if(Auth::user()->type == 'Retailer'): ?>
           
            <form class="content-block" method="post" action="<?php echo e(route('retailer-info-post')); ?>" >
              <?php echo csrf_field(); ?>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="firstname" class="form-label">Full Name</label>
                    <input id="firstname" type="text" class="form-control"  value="<?php echo e(Auth::user()->name); ?>" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" class="form-control"  value="<?php echo e(Auth::user()->email); ?>" readonly>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <?php if(count($datas)>0): ?>
              <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <input id="firstname" name="userID" type="text" class="form-control"  value="<?php echo e(Auth::user()->id); ?>" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Company/Organization</label>
                    <input id="phone" type="text" class="form-control" name="companyName" value="<?php echo e($value->companyName); ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" value="<?php echo e($value->phone); ?>" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" value="<?php echo e($value->division); ?>" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" value="<?php echo e($value->zipcode); ?>" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" value="<?php echo e($value->country); ?>" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" value="<?php echo e($value->street); ?>" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <input id="firstname" name="userID" type="text" class="form-control"  value="<?php echo e(Auth::user()->id); ?>" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Company/Organization</label>
                    <input id="phone" type="text" class="form-control" name="companyName" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              <?php endif; ?>
            </form>
            <?php else: ?>
            <form class="content-block" method="post" action="<?php echo e(route('gardener-info-post')); ?>">
              <?php echo csrf_field(); ?>
              <input id="firstname" name="userID" type="text" class="form-control"  value="<?php echo e(Auth::user()->id); ?>" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="firstname" class="form-label">Full Name</label>
                    <input id="firstname" type="text" class="form-control" value="<?php echo e(Auth::user()->name); ?>" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" class="form-control" value="<?php echo e(Auth::user()->email); ?>" readonly>
                  </div>
                </div>
              </div>
              <?php if(count($datastwo)>0): ?>
              <?php $__currentLoopData = $datastwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" value="<?php echo e($value->phone); ?>" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" value="<?php echo e($value->division); ?>" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP Code</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" value="<?php echo e($value->zipcode); ?>" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" value="<?php echo e($value->country); ?>" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" value="<?php echo e($value->street); ?>" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <input id="firstname" name="userID" type="text" class="form-control"  value="<?php echo e(Auth::user()->id); ?>" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP Code</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              <?php endif; ?>
            </form>
            <?php endif; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/account.blade.php ENDPATH**/ ?>