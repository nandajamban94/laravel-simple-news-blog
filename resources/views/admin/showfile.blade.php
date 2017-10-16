@extends('layouts.master')

@section('title')
	Panel File
@endsection

@section('content')
<div class="page-header">
  <h2>Panel File</h2>
</div>



 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Pengaturan File</h3>
  </div>
  <div class="panel-body">
  	<a  href="{{route('admin.uplaodfile')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah File</a>
    	<hr>
    <table id="example" class="table table-hover">
    	<thead>
    		<tr>
    			<td><h4>Nama File</h4></td>
    			<td><h4>Tipe File</h4></td>
    			<td><h4>judul file</h4></td>
    			<td><h4>Ukuran file</h4></td>
    			<td>Update File</td>
    		</tr>
    	</thead>
    	<tbody>
    		 @foreach($data as $file)
    		<tr>
    			<td>{{$file->name}}</td>
    			<td>{{$file->type}}</td>
    			<td>{{$file->title}}</td>
    			<td>{{$file->size}}</td>
    			<td><a href="{{url('files/'.$file->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
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