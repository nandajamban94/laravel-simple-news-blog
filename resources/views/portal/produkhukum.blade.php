@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
		

		<div class="page-header">
  			<h1>Produk Hukum <br><small>ini adalah beberapa produk hukum, silahkan di download </small></h1>
		</div>

		@foreach($data as $file)
		<ol class="breadcrumb">
			<!--nanti bisa digenti dengan nama domain-->
	  		<h5><a href="C:\xampp\htdocs\test\public\{{$file->name}}" download> {{$file->name}} </a> 
	  			<span class="label label-primary"> {{$file->title}} </span>
	  			<span class="label label-info"> {{$file->size}} kb </span>
	  			<span class="label label-success"> {{$file->updated_at}} </span>
	  		</h5>
		</ol>
		@endforeach
@endsection