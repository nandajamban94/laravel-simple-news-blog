@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
<div class="page-header">
  <h1>{{$data->judul}} <br>
  	<small>{{$data->sinopsis}}</small></h1>
</div>
<ol class="breadcrumb">
  <li>Di publish Tanggal: {{$data->created_at}}</li>
</ol>
<img src="{{$data->imagePath}}" class="img-rounded" style="max-height: 300px">
<h4>{{$data->deskripsi}}</h4>

@if($temp!=0)
<div class="panel panel-default">
  <div class="panel-heading">Agenda Terkait </div>
    <div class="panel-body">
	    {{$agenda->nama}} <br>
	    <span class="label label-info">{{$agenda->status}}</span> <br>
	    Tanggal Pelaksanaan : {{$agenda->tanggal_pelaksanaan}}<br>
	    Waktu Pelaksanaan : {{$agenda->waktu_pelaksanaan}}<br>
  </div>
</div>
@endif

@endsection