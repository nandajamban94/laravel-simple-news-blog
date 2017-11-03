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

<?php if($temp!=0): ?>
<div class="panel panel-default">
  <div class="panel-heading">Agenda Terkait </div>
    <div class="panel-body">
	    <?php echo e($agenda->nama); ?> <br>
	    <span class="label label-info"><?php echo e($agenda->status); ?></span> <br>
	    Tanggal Pelaksanaan : <?php echo e($agenda->tanggal_pelaksanaan); ?><br>
	    Waktu Pelaksanaan : <?php echo e($agenda->waktu_pelaksanaan); ?><br>
  </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>