<?php $__env->startSection('title'); ?>
	Portal News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Lihat Detail isi Agenda</h3>
     </div>
    <div class="panel-body">
      <table class="table table-hover">
	      	<thead>
	      	  <tr>
	      		<td>Nama</td>
	      		<td>Dibuat pada tanggal</td>
	      		<td>Di update pada tanggal</td>
	      		<td>Tanggal Pelaksanaan</td>
	      		<td>Waktu Pelaksanaan</td>
	      		<td>Tempat Pelaksanaan</td>
	      		<td>Pembahasan</td>
	      		<td>Status</td>
	      	</tr>
	      	</thead>
	      	<tbody>
		      		<tr>
			      		<td><?php echo e($data->nama); ?></td>
			      		<td><?php echo e($data->created_at); ?></td>
			      		<td><?php echo e($data->updated_at); ?></td>
			      		<td><?php echo e($data->tanggal_pelaksanaan); ?></td>
			      		<td><?php echo e($data->waktu_pelaksanaan); ?></td>
			      		<td><?php echo e($data->tempat_pelaksanaan); ?></td>
			      		<td><?php echo e($data->pembahasan); ?></td>
			      		<td><?php echo e($data->status); ?></td>
		      		</tr>
	      	</tbody>
		</table>
		<a href="<?php echo e(route('admin.agenda')); ?>" class="btn btn-primary">Kembali ke Panel Agenda</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>