<?php $__env->startSection('title'); ?>
	Portal News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="page-header">
  <h2>Halaman Panel Agenda </h2>
</div>

	
<div class="row">
  <div class="col-md-12">
  	<div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Panel Admin</h3>
     </div>
    <div class="panel-body">
    	<a  href="<?php echo e(route('admin.createagenda')); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Agenda</a>
    	<hr>
      <table id="example" class="table table-hover">
	      	<thead>
	      		<tr>
	      		<td>Nama</td>
	      		<td>Status</td>
	      		<td>Lihat Detail Agenda</td>
	      		<td>Edit Agenda</td>
	      		<td>Hapus Agenda</td>
	      	</tr>
	      	</thead>
	      	<tbody>
	      		<?php foreach($data as $a): ?>
		      		<tr>
			      		<td><?php echo e($a->nama); ?></td>
			      		<td><?php echo e($a->status); ?></td>
			      		<td><a href="<?php echo e(url('agendas/'.$a->id)); ?>" class="btn btn-info"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> </a></td>
			      		<td><a href="<?php echo e(url('agendas/'.$a->id.'/edit')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
			      		<td><form action="<?php echo e(url('agendas/'.$a->id)); ?>" method="post">
			      			 <?php echo e(csrf_field()); ?>

			      			<input type="hidden" name="_method" value="DELETE">
			      			<button class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
			      			</form>
			      			
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