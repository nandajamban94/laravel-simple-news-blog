<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use Auth;
use Session;
use App\Agenda;
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

    public function getupdateTipe(){
      return view('admin.update_tipeberita');
    }

    public function getUpdateBeritaRelasi(){
      $agenda= Agenda::all();
      return view('admin.update_berita_dengan_relasi')->with('agenda',$agenda);
    }

    public function postUpdateBeritaRelasi(Request $request){
        $this->validate($request, [
            'judul'      => 'required',
            'imagePath'  => 'required',
            'sinopsis'   => 'required',
            'deskripsi'  => 'required'
         ]);

        $judul     = $request['judul'] ;
        $imagePath = $request ['imagePath'];
        $sinopsis  = $request ['sinopsis'];
        $deskripsi = $request ['deskripsi'];

        $nama   = $request->get('agenda');

      
        $berita = new News;

        $berita->judul = $judul;
        $berita->imagePath= $imagePath;
        $berita->sinopsis = $sinopsis;
        $berita->deskripsi = $deskripsi;
        $berita->id_agenda = $nama;

        $berita->save();
        $data= News::all();
       return redirect()->route('admin.profile');
    }
   	
   
}
