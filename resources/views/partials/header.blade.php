<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href={{route('home.index')}}>Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">DPRD<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('dprd.pimpinan')}}">Pimpinan</a></li>
            <li><a href="{{route('dprd.komisi')}}">Komisi</a></li>
            <li><a href="{{route('dprd.badan_musyawarah')}}">Badan Musyawarah</a></li>
            <li><a href="{{route('dprd.badan_anggaran')}}">Badan Anggaran</a></li>
            <li><a href="{{route('dprd.badan_pembentukan_perda')}}">Badan Pembentukan Perda</a></li>
            <li><a href="{{route('dprd.badan_kehormatan')}}">Badan Kehormatan</a></li>
            <li><a href="{{route('dprd.fraksi')}}">Fraksi</a></li>
          </ul>
        </li>
        <li><a href="{{route('agenda.simplified')}}">Agenda</a></li>
        <li><a href="{{route('portal.produkhukum')}}">Produk Hukum</a></li>
      </ul>


  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
    <ul class="nav navbar-nav navbar-right">

        @if(Auth::check()) 
      
        <li><a><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->name }} </a></li>
        <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.profile')}}"> Panel Berita </a></li>

            <li><a href="{{route('admin.agenda')}}"> Panel Agenda</a></li>
            
            <li><a href="{{url('admin/showfile')}}"> Upload File</a></li>
          </ul>
        </li>

        @else
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('admin.signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
       @endif
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
    </div>
  </div>
</nav>

