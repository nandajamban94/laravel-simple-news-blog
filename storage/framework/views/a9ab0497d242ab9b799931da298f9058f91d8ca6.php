<?php $__env->startSection('title'); ?>
	Portal Agenda
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="page-header">
  <h2>Halaman Daftar Agenda </h2>
</div>

	
<div class="row">
  <div class="col-md-12">
  	<div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Daftar Agenda</h3>
     </div>
    <div class="panel-body">
      <table id="example" class="table table-hover">
	      	<thead>
	      		<tr>
	      		<td>Nama</td>
	      		<td>Status</td>
	      		<td>Tanggal dibuat</td>
	      		<td>Tanggal di update</td>
	      		<td>Tanggal Pelaksanaan</td>
	      		<td>Waktu Pelaksanaan</td>
	      		<td>Lihat Isi Agenda</td>
	      	</tr>
	      	</thead>
	      	<tbody>
	      		<?php foreach($data as $a): ?>
		      		<tr>
			      		<td><?php echo e($a->nama); ?></td>
			      		<td><?php echo e($a->status); ?></td>
			      		<td><?php echo e($a->created_at); ?></td>
			      		<td><?php echo e($a->updated_at); ?></td>
						<td><?php echo e($a->tanggal_pelaksanaan); ?></td>
			      		<td><?php echo e($a->waktu_pelaksanaan); ?></td>
			      		<td><a href="<?php echo e(url('publicportalagenda/'.$a->id)); ?>" class="btn btn-info"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> </a>
			      		</td>
		      		</tr>
	        	<?php endforeach; ?>
	      	</tbody>
		</table>
    </div>
   </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>