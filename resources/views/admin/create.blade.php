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
  <div class="panel-heading">
    <h3 class="panel-title">Panel tulis berita baru</h3>
  </div>
  <div class="panel-body">
		<div class="col-md-12 ">
			<form  action="{{route('admin.create')}}" method="post">
			  <div class="form-group">
			    <label >Judul</label>
			    <div class="form-group">
			      <input type="text"  class="form-control " id="judul" name="judul" placeholder="tulis judul berita" >
			    </div>
			    <label >ImageURL:</label>
			    <div class="form-group">
			      <input type="text"  class="form-control" id="imagePath" name="imagePath" placeholder="masukan url link gambar" >
			    </div>
			    <label >Sinopsis</label>
			    <div class="form-group">
			      <input type="text"  class="form-control" id="sinopsis" name="sinopsis" placeholder="sinopsis berita secara singkat" >
			    </div>
			  </div>
			  <div class="form-group">
			    <label >Deksripsi</label>
			    <textarea class="form-control" rows="20" id="deskripsi" name="deskripsi" placeholder="isi berita"></textarea>
			  </div>
			  <div class="form-group">
			    <div class="col-md-12">
			      <button type="submit" class="btn btn-default">Tambah</button>
			      {{ csrf_field() }}
			    </div>
			  </div>
			</form>
		</div>
  </div>
</div>	


@endsection