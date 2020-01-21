<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
                    <li><a href="<?php echo e(url('/backend/deshboard')); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="<?php echo e(url('backend/faq/edit')); ?>">FAQ Edit</a></li>
                </ol>
                <div class="col-md-12"> 
                <h2>FAQ Update</h2>
	   <form action="<?php echo e(url('backend/faq/update',$faqs->id )); ?>" method="post">
	   	<?php echo csrf_field(); ?>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">FAQ Title</label>
		    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Question FAQ Title" value="<?php echo e($faqs->title); ?>" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Description</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required><?php echo e($faqs->description); ?></textarea>
		  </div>
		   <button type="submit" class="btn btn-primary" name="submit">Update</button>
		</form>
		<br>
		<br>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FloraAid\resources\views/admin/faq-edit.blade.php ENDPATH**/ ?>