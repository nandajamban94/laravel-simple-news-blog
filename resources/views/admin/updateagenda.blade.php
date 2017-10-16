@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')
<h2>Tulis Agenda Baru</h2>
<a href="{{route('admin.agenda')}}" class="btn btn-primary">Kembali ke Panel Agenda</a>
<hr>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel Sunting Agenda</h3>
  </div>
  <div class="panel-body">
		<div class="col-md-12 ">
			<form class="form-horizontal" action="{{url('agendas/'.$data->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
			  	{{ csrf_field() }}
			  <div class="form-group">
			    <label for="nama" class="col-md-2 control-label"><center>Nama Agenda</center></label>
			    <div class="form-group">
			      <input type="text"  class="form-control " id="nama" name="nama"  value="{{$data->nama}}">
			    </div>
			    <label for="tanggal_pelaksanaan" class="col-md-2 control-label"><center>Tanggal Pelaksanaan</center></label>
			    <div class="form-group">
			      <input type="text"  class="form-control" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan"  value="{{$data->tanggal_pelaksanaan}}">
			    </div>

			     <label for="waktu_pelaksanaan" class="col-md-2 control-label"><center>Waktu Pelaksanaan</center></label>
			    <div class="form-group">
			      <input type="text"  class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" p value="{{$data->waktu_pelaksanaan}}" >
			    </div>

			     <label for="tempat_pelaksanaan" class="col-md-2 control-label"><center>Tempat Pelaksanaan</center></label>
			    <div class="form-group">
			      <input type="text"  class="form-control" id="tempat_pelaksanaan" name="tempat_pelaksanaan"  value="{{$data->tempat_pelaksanaan}}" >
			    </div>

			    <label for="status" class="col-md-2 control-label"><center>Status</center></label>
			    <div class="form-group">
			      <input type="text"  class="form-control" id="status" name="status" value="{{$data->status}}">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="pembahasan" class="col-md-2 control-label"><center>Pembahasan</center></label>
			    <textarea class="form-control" rows="20" id="pembahasan" name="pembahasan" placeholder="isi Pembahasan agenda">{{$data->pembahasan}}</textarea>
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