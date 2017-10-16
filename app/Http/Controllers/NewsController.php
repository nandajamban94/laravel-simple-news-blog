<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use Auth;
use Session;
class NewsController extends Controller
{
    public function getIndex(){
    	$data= News::all(); //ambil semua berita
    	return view('portal.index')->with('data',$data);
    }

     public function getCreate(){
   		return view('admin.create');
   	}

   	public function postCreate(Request $request){
   		News::create($request->all());
   		return redirect()->route('admin.profile');
   	}

   	public function show($id){
   		$data = News::find($id);
   		return view('admin.detail')->with('data',$data);
   	}

   	public function edit(Request $request,$id){
   		//mengarahkan ke halaman edit
   		$data= News::find($id);
   		return view('admin.update')->with('data',$data);
   	}

   	public function update(Request $request, $id){
   		//update ke database
   		News::find($id)->update($request->all());
   		return redirect()->route('admin.profile');
   	}

   	public function destroy($id){
   		News::find($id)->delete();
   		return redirect()->route('admin.profile');
   	}

   	
   
}
