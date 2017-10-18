<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a>
   <a class="navbar-brand" href="#">DPRD</a>
   <a class="navbar-brand" href="#">Sekretariat</a>
   <a class="navbar-brand" href="<?php echo e(route('agenda.simplified')); ?>" data-toggle="tooltip" data-placement="bottom" title="Klik untuk melihat daftar keseluruhan agenda">Agenda</a>
   <a class="navbar-brand" href="<?php echo e(route('portal.produkhukum')); ?>">Produk Hukum</a>

  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
    <ul class="nav navbar-nav navbar-right">

        <?php if(Auth::check()): ?> 
      
        <li><a><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo e(Auth::user()->name); ?> </a></li>
        <li><a href="<?php echo e(route('admin.logout')); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo e(route('admin.profile')); ?>"> Panel Berita </a></li>

            <li><a href="<?php echo e(route('admin.agenda')); ?>"> Panel Agenda</a></li>
            
            <li><a href="<?php echo e(url('admin/showfile')); ?>"> Upload File</a></li>
          </ul>
        </li>

        <?php else: ?>
        <li><a href="<?php echo e(route('admin.signin')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Sign in</a></li>
       <?php endif; ?>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

