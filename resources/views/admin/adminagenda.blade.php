@extends('layouts.master')

@section('title')
	Portal News
@endsection

@section('content')


<div class="page-header">
  <h2>Halaman Panel Agenda </h2>
</div>

	
<div class="row">
  <div class="col-md-12">
  	<div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Panel Admin</h3>
     </div>
    <div class="panel-body">
    	<a  href="{{route('admin.createagenda')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Agenda</a>
    	<hr>
      <table id="example" class="table table-hover">
	      	<thead>
	      		<tr>
	      		<td>Nama</td>
	      		<td>Status</td>
	      		<td>Lihat Detail Agenda</td>
	      		<td>Edit Agenda</td>
	      		<td>Hapus Agenda</td>
	      	</tr>
	      	</thead>
	      	<tbody>
	      		@foreach($data as $a)
		      		<tr>
			      		<td>{{$a->nama}}</td>
			      		<td>{{$a->status}}</td>
			      		<td><a href="{{url('agendas/'.$a->id)}}" class="btn btn-info"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> </a></td>
			      		<td><a href="{{url('agendas/'.$a->id.'/edit')}}" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
			      		<td><form action="{{url('agendas/'.$a->id)}}" method="post">
			      			 {{csrf_field()}}
			      			<input type="hidden" name="_method" value="DELETE">
			      			<button class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
			      			</form>
			      			
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

