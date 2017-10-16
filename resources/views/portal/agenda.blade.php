@extends('layouts.master')

@section('title')
	   Agenda
@endsection

@section('content')



<div class="page-header clearfix">
  <h1> Daftar Agenda </h1><a href="{{route('portal.portalagenda')}}" class="btn btn-primary " ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari Agenda tertentu</a>
</div>


<div class="well well-lg">
	@foreach($data->chunk(3) as $a)
    <div class="row">
   @foreach($a as $b)
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <div class="caption">
	        <h3>{{$b->nama}}</h3>
	        <span class="label label-primary">{{$b->status}}</span>
	        <hr>
	        <p>Tanggal Pelaksanaan: {{$b->tanggal_pelaksanaan}}</p>
	        <p>Waktu Pelaksanaan  : {{$b->waktu_pelaksanaan}}</p>
	        <p>Tempat Pelaksanaan :{{$b->tempat_pelaksanaan}}</p>
	        <p>Pembahasan<hr> <br>{{$b->pembahasan}}</p>
	      </div>
   		</div>
 	 </div>
 	 @endforeach
	</div>
  @endforeach

</div>


@endsection