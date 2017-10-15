@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
<div class="page-header">
  <h1>Example page header <small>Subtext for header</small></h1>
</div>

<div class="row">
  <div class="col-md-12" >
  	
  				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="http://i64.tinypic.com/ja9hyw.jpg" >
					      <div class="carousel-caption">
					        Los angeles
					      </div>
					    </div>
					    <div class="item">
					      <img src="http://i67.tinypic.com/2vxr8zt.jpg" >
					      <div class="carousel-caption">
					        Chicago
					      </div>
					    </div>

					     <div class="item">
					      <img src="http://i63.tinypic.com/w8qqs9.jpg" >
					      <div class="carousel-caption">
					        Sana andreas
					      </div>
					    </div>
					    
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
	</div>
	<div class="row">
		
	</div>
	<hr>
	<div class="page-header">
  		<h3>Kumpulan Artikel</h3>
	</div>

<div class="row">
  <div class="col-md-12">
  		@foreach($data->chunk(3) as $a)
			<div class="row">
				@foreach($a as $b)
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{$b->imagePath}}">
			      <div class="caption">
			        <h3>{{$b->judul}}</h3>
			        <p>{{$b->sinopsis}}</p>

			        <p><a href="{{url('newspage/'.$b->id)}}" class="btn btn-primary" role="button">View Article</a></p>
			      </div>
			    </div>
			  </div>
			  @endforeach
			</div>
		@endforeach
  </div>
</div>
@endsection