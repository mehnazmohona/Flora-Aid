<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
                  <li><a href="<?php echo e(url('/backend/deshboard')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="<?php echo e(url('backend/product')); ?>">Product</a></li>
                </ol>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Retailer Information View
                             </div>
                             <div class="col-md-3 text-right">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	  <th>Product Title</th>
                                        <th>Product Type</th>
                                        <th>Company/Organization</th>
                                        <th>Quentity</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <td>Manage</td>
                                    </tr>
                            	</thead>
                                <tbody>
                                  <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                	<tr>
                                    	  <td><?php echo e($products->productName); ?></td>
                                        <td><?php echo e($products->productType); ?></td>
                                        <td><?php echo e($products->company); ?></td>
                                        <td><?php echo e($products->productQuantity); ?></td>
                                        <td><?php echo e($products->price); ?></td>
                                        <td><img src="<?php echo asset('userInterface/product/'.$products->image); ?>" style="height: 50px;"></td>
                                        <td>
                                            <form class="form-inline" action="<?php echo e(route('product.delete', $products->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="cart_id" />
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i></button>
                                          </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/admin/product.blade.php ENDPATH**/ ?>