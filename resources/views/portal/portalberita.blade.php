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


@endsection