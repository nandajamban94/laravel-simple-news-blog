@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
  @if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
							<p>{{ $error }}</p>
						@endforeach
					</div>
		@endif
<div class="panel panel-default">
  <div class="panel-heading">Update Berita dengan relasi agenda</div>

  <div class="panel-body">
  	<form action="{{route('admin.updateberita_relasi')}}" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">judul Berita</label>
		    <input type="text" class="form-control" id="judul" name="judul" placeholder="judul">
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">ImageUrl</label>
		    <input type="text" class="form-control" name="imagePath" id="ImagePath" placeholder="ImagePath">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1"> Sinopsis</label>
		    <input type="text" class="form-control" name="sinopsis" id="sinopsis" placeholder="Sinopsis">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Deskripsi</label>
		   <textarea class="form-control" rows=10 name="deskripsi" id="deskripsi"> </textarea>
		  </div>
		  <div class="form-group">
		  	<label>Pilih Agenda yang akan direlasikan </label>
		  	 <select class="form-control" name="agenda">
		  	 	  @foreach($agenda as $a)
				  <option value="{!! $a->id !!}">{{$a->nama}}</option>
				  @endforeach
		  	 </select>
		  </div>
		  <button type="submit" class="btn btn-default">Simpan</button>
		  {{ csrf_field() }}
 </form>
   
  </div>
</div>



@endsection