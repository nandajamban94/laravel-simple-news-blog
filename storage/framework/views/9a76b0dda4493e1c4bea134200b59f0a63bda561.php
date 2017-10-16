<?php $__env->startSection('title'); ?>
	   Agenda
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="page-header clearfix">
  <h1> Daftar Agenda </h1><a href="<?php echo e(route('portal.portalagenda')); ?>" class="btn btn-primary " ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari Agenda tertentu</a>
</div>


<div class="well well-lg">
	<?php foreach($data->chunk(3) as $a): ?>
    <div class="row">
   <?php foreach($a as $b): ?>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <div class="caption">
	        <h3><?php echo e($b->nama); ?></h3>
	        <span class="label label-primary"><?php echo e($b->status); ?></span>
	        <hr>
	        <p>Tanggal Pelaksanaan: <?php echo e($b->tanggal_pelaksanaan); ?></p>
	        <p>Waktu Pelaksanaan  : <?php echo e($b->waktu_pelaksanaan); ?></p>
	        <p>Tempat Pelaksanaan :<?php echo e($b->tempat_pelaksanaan); ?></p>
	        <p>Pembahasan<hr> <br><?php echo e($b->pembahasan); ?></p>
	      </div>
   		</div>
 	 </div>
 	 <?php endforeach; ?>
	</div>
  <?php endforeach; ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>