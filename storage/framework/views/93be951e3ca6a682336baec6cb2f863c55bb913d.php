<?php $__env->startSection('title'); ?>
	Panel File
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h2>Panel File</h2>
</div>



 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Pengaturan File</h3>
  </div>
  <div class="panel-body">
  	<a  href="<?php echo e(route('admin.uplaodfile')); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah File</a>
    	<hr>
    <table id="example" class="table table-hover">
    	<thead>
    		<tr>
    			<td><h4>Nama File</h4></td>
    			<td><h4>Tipe File</h4></td>
    			<td><h4>judul file</h4></td>
    			<td><h4>Ukuran file</h4></td>
    			<td>Update File</td>
    		</tr>
    	</thead>
    	<tbody>
    		 <?php foreach($data as $file): ?>
    		<tr>
    			<td><?php echo e($file->name); ?></td>
    			<td><?php echo e($file->type); ?></td>
    			<td><?php echo e($file->title); ?></td>
    			<td><?php echo e($file->size); ?></td>
    			<td><a href="<?php echo e(url('files/'.$file->id.'/edit')); ?>" class="btn btn-primary">Edit</a></td>
    		</tr>
    		<?php endforeach; ?>
    	</tbody>
    </table>
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