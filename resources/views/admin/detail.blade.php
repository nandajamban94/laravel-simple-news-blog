@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
<a href="{{route('admin.profile')}}" class="btn btn-primary"><i class="fa fa-undo" aria-hidden="true"></i> Kembali ke Panel Berita</a>
<hr>
   <div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Lihat Detail Isi Berita</h3>
     </div>
    <div class="panel-body">
      <table class="table table-hover">
	      	<thead>
	      	  <tr>
	      		<td>Judul</td>
	      		<td>Tanggal dibuat</td>
	      		<td>Tanggan terakhir diedit</td>
	      		<td>Deskripsi</td>
	      		<td>Sinopsis</td>
	      		<td>ID berita</td>
	      		<td>gambar</td>
	      	  </tr>
	      	</thead>
	      	<tbody>
		      		<tr>
			      		<td>{{$data->judul}}</td>
			      		<td>{{$data->created_at}}</td>
			      		<td>{{$data->updated_at}}</td>
			      		<td>{{$data->deskripsi}}</td>
			      		<td>{{$data->sinopsis}}</td>
			      		<td>{{$data->id}}</td>
			      		<td> <img class="media-object" src="{{$data->imagePath}}" style="max-height:100px;"></td>
		      		</tr>
	        	
	      	</tbody>
		</table>
    </div>
@endsection