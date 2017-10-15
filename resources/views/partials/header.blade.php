<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{route('home.index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a>
   <a class="navbar-brand" href="#">DPRD</a>
   <a class="navbar-brand" href="#">Sekretariat</a>
   <a class="navbar-brand" href="#">Agenda</a>
   <a class="navbar-brand" href="#">Produk Hukum</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
    <ul class="nav navbar-nav navbar-right">

        @if(Auth::check()) 
        <li><a href="{{route('admin.profile')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->name }} Profile </a></li>
        <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a></li>
        @else
        <li><a href="{{route('admin.signin')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Sign in</a></li>
       @endif
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

