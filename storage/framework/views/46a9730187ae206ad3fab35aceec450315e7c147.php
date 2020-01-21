<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
                  <li><a href="<?php echo e(url('/backend/deshboard')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="<?php echo e(url('backend/manage/faq')); ?>">Manage FAQ</a></li>
                </ol>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All FAQ Information View
                             </div>
                             <div class="col-md-3 text-right">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>FAQ Title</th>
                                        <th>Description</th>
                                        <td>Manage</td>
                                    </tr>
                            	</thead>
                              <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                	<tr>
                                    	  <td><?php echo e($faq->title); ?></td>
                                        <td><?php echo e($faq->description); ?></td>
                                        <td><a href="<?php echo e(url('backend/faq/edit',$faq->id)); ?>" class="btn btn-success">Edit</a> <a href="#deleteModal<?php echo e($faq->id); ?>" data-toggle="modal" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                </tbody>
                                 <!--delete data modal-->
                                <div class="modal fade" id="deleteModal<?php echo e($faq->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          
                                          <div class="modal-body">
                                            <form action="<?php echo route('faq.delete', $faq->id); ?>"  method="post">
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
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->

               

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/admin/manage-faq.blade.php ENDPATH**/ ?>