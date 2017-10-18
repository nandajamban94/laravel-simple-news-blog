<?php $__env->startSection('title'); ?>
	File Upload
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<a href="<?php echo e(url('admin/showfile')); ?>" class="btn btn-primary">Kembali ke Panel File</a>
<hr>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Upload File</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-10">
      <form action="store" method="post" enctype="multipart/form-data" class="form-horizontal">  

      <div class="form-group">
         <label for="name">Judul File</label>
         <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
         <label for="filepdf">File pdf</label>
         <input type="file" name="filepdf" >
       </div>

         <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
         <input type="submit" class="btn btn-primary" name="submit" value="Submit">
         
      </form>
   </div>
  </div>
</div>
  


     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>