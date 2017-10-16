@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
   <div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Lihat Detail isi Agenda</h3>
     </div>
    <div class="panel-body">
      <table class="table table-hover">
	      	<thead>
	      	  <tr>
	      		<td>Nama</td>
	      		<td>Dibuat pada tanggal</td>
	      		<td>Di update pada tanggal</td>
	      		<td>Tanggal Pelaksanaan</td>
	      		<td>Waktu Pelaksanaan</td>
	      		<td>Tempat Pelaksanaan</td>
	      		<td>Pembahasan</td>
	      		<td>Status</td>
	      	</tr>
	      	</thead>
	      	<tbody>
		      		<tr>
			      		<td>{{$data->nama}}</td>
			      		<td>{{$data->created_at}}</td>
			      		<td>{{$data->updated_at}}</td>
			      		<td>{{$data->tanggal_pelaksanaan}}</td>
			      		<td>{{$data->waktu_pelaksanaan}}</td>
			      		<td>{{$data->tempat_pelaksanaan}}</td>
			      		<td>{{$data->pembahasan}}</td>
			      		<td>{{$data->status}}</td>
		      		</tr>
	      	</tbody>
		</table>
		<a href="{{route('admin.agenda')}}" class="btn btn-primary">Kembali ke Panel Agenda</a>
    </div>
@endsection