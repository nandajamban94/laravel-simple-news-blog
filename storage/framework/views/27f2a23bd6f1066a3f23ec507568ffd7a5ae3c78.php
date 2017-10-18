<?php $__env->startSection('title'); ?>
	Portal News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="well">
	<h3>	Admin Sign in </h3>
	<hr>
	<div >
		<?php if(count($errors)>0): ?>
					<div class="alert alert-danger">
						<?php foreach($errors->all() as $error): ?>
							<p><?php echo e($error); ?></p>
						<?php endforeach; ?>
					</div>
		<?php endif; ?>
		<form class="form-horizontal" action="<?php echo e(route('admin.signin')); ?>" method="post">
		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		      <?php echo e(csrf_field()); ?>

		    </div>
		  </div>
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>