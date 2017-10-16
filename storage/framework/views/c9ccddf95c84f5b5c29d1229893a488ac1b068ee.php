<?php $__env->startSection('title'); ?>
	Portal News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
		

		<div class="page-header">
  			<h1>Produk Hukum <br><small>ini adalah beberapa produk hukum, silahkan di download </small></h1>
		</div>

		<?php foreach($data as $file): ?>
		<ol class="breadcrumb">
			<!--nanti bisa digenti dengan nama domain-->
	  		<h5><a href="C:\xampp\htdocs\test\public\<?php echo e($file->name); ?>" download> <?php echo e($file->name); ?> </a> 
	  			<span class="label label-primary"> <?php echo e($file->title); ?> </span>
	  			<span class="label label-info"> <?php echo e($file->size); ?> kb </span>
	  			<span class="label label-success"> <?php echo e($file->updated_at); ?> </span>
	  		</h5>
		</ol>
		<?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>