<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
                  <li><a href="<?php echo e(url('/backend/deshboard')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="<?php echo e(url('backend/gardener')); ?>">Gardener</a></li>
                </ol>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Gardener Information
                             </div>
                             <div class="col-md-3 text-right">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Name</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                  <?php $__currentLoopData = $gardener; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $garden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                	<tr>
                                    	<td><?php echo e($garden->name); ?></td>
                                        <td><?php echo e($garden->email); ?></td>
                                        <td><?php echo e($garden->type); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/admin/gardener.blade.php ENDPATH**/ ?>