<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\File;

use Illuminate\Support\Facades\Input;

class UploadFileController extends Controller
{
    
    public function getIndex(){
    	
    	return view('admin.uploadfile');
     }

     public function store(Request $request){
     	$data = new file;

     	$data->title= Input::get('name');
     	if (Input::hasFile('filepdf')) {
     		$file = Input::file('filepdf');
     		$file->move(public_path().'/',$file->getClientOriginalName());

     		$data->name= $file->getClientOriginalName();
     		$data->size= $file->getClientsize();
     		$data->type= $file->getClientMimeType();
     		# code...
     	}

     	$data->save();
     	return redirect('admin/showfile');
     }

     public function showall(){
     	$data=File::all();
     	return view('admin.showfile',compact('data'));
     }

     public function edit(Request $request,$id){
   		//mengarahkan ke halaman edit
   		$data= File::find($id);
   		return view('admin.editfile')->with('data',$data);
   	}

   	public function update(Request $request, $id){
   		//update ke database dan public file
      $data = File::find($id);
      $data->title= Input::get('name');
   		if (Input::hasFile('filepdf')) {
   			$file = Input::file('filepdf');
        $file->move(public_path().'/',$file->getClientOriginalName());
        $data->name= $file->getClientOriginalName();
        $data->size= $file->getClientsize();
        $data->type= $file->getClientMimeType();

   		}
      $data->save();
   		return redirect('admin/showfile');
   	}
}
