<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
                    <li><a href="<?php echo e(url('/backend/deshboard')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="<?php echo e(url('backend/message')); ?>">Message</a></li>
                </ol>
                <div class="col-md-12">


                    <h3 style="text-align:center; padding-bottom:60px;">Contact Information</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allmessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($allmessage->id); ?></th>
                                <td><?php echo e($allmessage->name); ?></td>
                                <td><?php echo e($allmessage->email); ?></td>
                                <td><?php echo e($allmessage->message); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/admin/message.blade.php ENDPATH**/ ?>