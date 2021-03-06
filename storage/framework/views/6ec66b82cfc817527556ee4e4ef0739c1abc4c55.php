<?php $__env->startSection('title'); ?>
	Portal News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('admin.profile')); ?>" class="btn btn-primary"><i class="fa fa-undo" aria-hidden="true"></i> Kembali ke Panel Berita</a>
<hr>
   <div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Lihat Detail Isi Berita</h3>
     </div>
    <div class="panel-body">
      <table class="table table-hover">
	      	<thead>
	      	  <tr>
	      		<td>Judul</td>
	      		<td>Tanggal dibuat</td>
	      		<td>Tanggan terakhir diedit</td>
	      		<td>Deskripsi</td>
	      		<td>Sinopsis</td>
	      		<td>ID berita</td>
	      		<td>Agenda Terkait</td>
	      		<td>gambar</td>
	      	  </tr>
	      	</thead>
	      	<tbody>
		      		<tr>
			      		<td><?php echo e($data->judul); ?></td>
			      		<td><?php echo e($data->created_at); ?></td>
			      		<td><?php echo e($data->updated_at); ?></td>
			      		<td><?php echo e($data->deskripsi); ?></td>
			      		<td><?php echo e($data->sinopsis); ?></td>
			      		<td><?php echo e($data->id); ?></td>
			      		<td>
			      			<?php if($bool==1): ?>
			      			<?php echo e($agenda->nama); ?>

			      			<?php else: ?>
			      			Berita ini tidak ada relasi dengan Agenda
			      			<?php endif; ?>
			      		</td>
			      		<td> <img class="media-object" src="<?php echo e($data->imagePath); ?>" style="max-height:100px;"></td>
		      		</tr>
	        	
	      	</tbody>
		</table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>