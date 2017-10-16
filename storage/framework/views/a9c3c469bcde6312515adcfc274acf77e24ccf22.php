<?php $__env->startSection('title'); ?>
	Portal News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Sunting Berita</h3>
  </div>
  <div class="panel-body">
		<div class="col-md-12 ">
			<form class="form-horizontal" action="<?php echo e(url('news/'.$data->id)); ?>" method="post">
			<input type="hidden" name="_method" value="PUT">
			  <?php echo e(csrf_field()); ?>

			  <div class="form-group">
			    <label for="judul" class="col-md-1 control-label">Judul</label>
			    <div class="form-group">
			      <input type="text"  class="form-control " id="judul" name="judul" value="<?php echo e($data->judul); ?>" >
			    </div>
			    <label for="imagePath" class="col-md-1 control-label">ImageURL</label>
			    <div class="form-group">
			      <input type="text"  class="form-control " id="imagePath" name="imagePath" value="<?php echo e($data->imagePath); ?>" >
			    </div>
			    <label for="sinopsis" class="col-md-1 control-label">Sinopsis</label>
			    <div class="form-group">
			      <input type="text"  class="form-control " id="sinopsis" name="sinopsis" value="<?php echo e($data->sinopsis); ?>" >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="deskripsi" class="col-md-1 control-label">Deksripsi</label>
			    <textarea class="form-control" rows="20" id="deskripsi" name="deskripsi" ><?php echo e($data->deskripsi); ?></textarea>
			  </div>
			  <div class="form-group">
			    <div class="col-md-12">
			      <input type="submit" class="btn btn-success" value="simpan">
			
			    </div>
			  </div>
			</form>
		</div>
  </div>
</div>	


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>