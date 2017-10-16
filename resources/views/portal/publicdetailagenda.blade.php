@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
<div class="page-header">
  <h1>{{$data->nama}} <br>
  	<small>{{$data->tempat_pelaksanaan}}</small></h1>
</div>
<ol class="breadcrumb">
  <li>Di publish Tanggal: {{$data->created_at}}  / Di update Tanggal {{$data->updated_at}} / Waktu Agenda Dilaksanakan {{$data->waktu_pelaksanaan}} / <span class="label label-info">{{$data->status}}</span></li>
</ol>
<img src="{{$data->imagePath}}" class="img-rounded" style="max-height: 300px">
<h4>{{$data->pembahasan}}</h4>


@endsection