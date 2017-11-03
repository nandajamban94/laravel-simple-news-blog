@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
	<a href="{{route('admin.create')}}" class="button btn btn-primary btn-lg btn-block">Berita Tanpa relasi agenda</a>
	<a href="{{route('admin.updateberita_relasi')}}" class="button btn btn-primary btn-lg btn-block">Berita dengan relasi agenda</a>
@endsection