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
         $this->validate($request, [
            'judul'      => 'required',
            'imagePath'  => 'required',
            'sinopsis'   => 'required',
            'deskripsi'  => 'required'
         ]);
   		News::create($request->all());
   		return redirect()->route('admin.profile');
   	}

   	public function show($id){
   		$data = News::find($id);
      $id_agenda= $data->id_agenda;
      $agenda = Agenda::find($id_agenda);
      if ($id_agenda==0) {
        # code...
        $agenda=0;
        $bool=0;
        return view('admin.detail',['data' => $data, 'agenda' => $agenda, 'bool'=> $bool]); 
      }
      else{
        $bool=1;
         return view('admin.detail',['data' => $data, 'agenda' => $agenda, 'bool'=> $bool]); 
      }
     
   	}

   	public function edit(Request $request,$id){
   		//mengarahkan ke halaman edit
      $agenda = Agenda::all();
   		$data= News::find($id);
      if ($data->id_agenda==0) {
        # code...
        $agenda=0;
        $bool=0;
         return view('admin.update',['data' => $data, 'agenda' => $agenda, 'bool'=> $bool]); 
      }
      else{
        $bool=1;
   		 return view('admin.update',['data' => $data, 'agenda' => $agenda, 'bool'=> $bool]); 
      }
   	}

   	public function update(Request $request, $id){
   		//update ke database
     
   		News::find($id)->update($request->all());
         $this->validate($request, [
            'judul'      => 'required',
            'imagePath'  => 'required',
            'sinopsis'   => 'required',
            'deskripsi'  => 'required'
         ]);
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
