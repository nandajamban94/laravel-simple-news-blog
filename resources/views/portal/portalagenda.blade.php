@extends('layouts.master')

@section('title')
	Portal Agenda
@endsection

@section('content')


<div class="page-header">
  <h2>Halaman Daftar Agenda </h2>
</div>

	
<div class="row">
  <div class="col-md-12">
  	<div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Daftar Agenda</h3>
     </div>
    <div class="panel-body">
      <table id="example" class="table table-hover">
	      	<thead>
	      		<tr>
	      		<td>Nama</td>
	      		<td>Status</td>
	      		<td>Tanggal dibuat</td>
	      		<td>Tanggal di update</td>
	      		<td>Tanggal Pelaksanaan</td>
	      		<td>Waktu Pelaksanaan</td>
	      		<td>Lihat Isi Agenda</td>
	      	</tr>
	      	</thead>
	      	<tbody>
	      		@foreach($data as $a)
		      		<tr>
			      		<td>{{$a->nama}}</td>
			      		<td>{{$a->status}}</td>
			      		<td>{{$a->created_at}}</td>
			      		<td>{{$a->updated_at}}</td>
						<td>{{$a->tanggal_pelaksanaan}}</td>
			      		<td>{{$a->waktu_pelaksanaan}}</td>
			      		<td><a href="{{url('publicportalagenda/'.$a->id)}}" class="btn btn-info"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> </a>
			      		</td>
		      		</tr>
	        	@endforeach
	      	</tbody>
		</table>
    </div>
   </div>
  </div>
</div>


@endsection
@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush