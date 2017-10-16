<?php $__env->startSection('title'); ?>
	Portal News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h1><?php echo e($data->judul); ?> <br>
  	<small><?php echo e($data->sinopsis); ?></small></h1>
</div>
<ol class="breadcrumb">
  <li>Di publish Tanggal: <?php echo e($data->created_at); ?></li>
</ol>
<img src="<?php echo e($data->imagePath); ?>" class="img-rounded" style="max-height: 300px">
<h4><?php echo e($data->deskripsi); ?></h4>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>