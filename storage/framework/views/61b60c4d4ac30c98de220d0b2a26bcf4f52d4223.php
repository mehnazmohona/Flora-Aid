<?php $__env->startSection('content'); ?>

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Store House</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Store House</li>
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
            <form action="<?php echo e(route('store-product')); ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <!-- Invoice Address-->
              <div class="block-header mb-5">
                <h5>Product Information </h5>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="productname" class="form-label">Product Name</label>
                  <input id="productname" type="text" name="productName" placeholder="Enter you product name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="producttype" class="form-label">Product Type</label>
<!--                   <input id="producttype" type="text" name="producttype" placeholder="Enter your product type" class="form-control"> -->
                  <select id="productType" type="text" name="productType" class="form-control" required style="padding: 0 10px;
">
                    <option value="Select User Type">Select Category</option>
                    <option value="Fruit tree">Fruit tree</option>
                    <option value="Medicine Tree">Medicine Tree</option>
                    <option value="Blossom tree">Flower tree</option>
                    <option value="Forest for the trees">Forest for the trees</option>
                    <option value="Aloe vera">Aloe vera</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Soil">Soil</option>
                    <option value="Soil">Other</option>
                  </select>

                </div>
                <div class="form-group col-md-6">
                  <label for="productquentity" class="form-label">Product Quentity</label>
                  <input id="productquentity" type="text" name="productQuentity" placeholder="enter your product quentity address" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="price" class="form-label">Price</label>
                  <input id="price" type="text" name="price" placeholder="Your price name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone-number" class="form-label">Phone Number</label>
                  <input id="phone-number" type="number" name="phone" placeholder="Your phone number" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="company" class="form-label">Company/Organization</label>
                  <input id="company" type="text" name="company" placeholder="Your company/Organization name" class="form-control">
                </div>

                <div class="form-group col-md-12">
                  <label for="image" class="form-label">Product Description</label>
                 <textarea id="description" type="text" name="description" placeholder="Your description" class="form-control" required>
                  
                  </textarea>
                </div>
                <div class="form-group col-md-12">
                  <label for="image" class="form-label">Product Photo</label>
                  <input id="image" type="file" name="image" placeholder="Your Product Photo" class="form-control">
                </div>
              </div>
              <!-- /Invoice Address-->
              <div class="row">
                <div class="form-group col-12 mt-3">
                  <button type="submit" class="btn btn-template wide" name="submit"><i class="fa fa-save"></i>Store</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.asset-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/store-product.blade.php ENDPATH**/ ?>