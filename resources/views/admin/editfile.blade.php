@extends('layouts.master')

@section('title')
	File Edit
@endsection

@section('content')

<a href="{{url('/showfile')}}" class="btn btn-primary">Kembali ke Panel File</a>
<hr>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Update File</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-10">
      <form action="{{url('files/'.$data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">  
	 <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}
      <div class="form-group">
         <input type="text" name="name" class="form-control" value="{{$data->title}}">
      </div>

      <div class="form-group">
         <label for="filepdf">File pdf</label>
         <input type="file" name="filepdf" placeholder="upload file baru" >
       </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Submit">
         
      </form>
   </div>
  </div>
</div>
  


     
@endsection