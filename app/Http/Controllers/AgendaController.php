<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agenda;
use Session;
use Auth;
class AgendaController extends Controller
{
   

   	 public function getAgendaPage(){ //ke halaman profile
   	  $data = Agenda::all();
      return view('admin.adminagenda')->with('data',$data);
   }

   public function getCreateAgendaPage(){
   		return view('admin.createagenda');
   }

   public function postCreateAgendaPage(Request $request){
        $this->validate($request, [
            'nama'      => 'required',
            'tanggal_pelaksanaan'  => 'required',
            'waktu_pelaksanaan'   => 'required',
            'tempat_pelaksanaan'  => 'required',
            'status'          => 'required',
            'pembahasan' => 'required'
         ]);
   		Agenda::create($request->all());
   		return redirect()->route('admin.agenda');
   }

   	public function show($id){
   		$data = Agenda::find($id);
   		return view('admin.detailagenda')->with('data',$data);
   	}

   	public function edit(Request $request,$id){
   		//mengarahkan ke halaman edit

   		$data= Agenda::find($id);
   		return view('admin.updateagenda')->with('data',$data);
   	}


   	public function update(Request $request, $id){
   		//update ke database
           $this->validate($request, [
            'nama'      => 'required',
            'tanggal_pelaksanaan'  => 'required',
            'waktu_pelaksanaan'   => 'required',
            'tempat_pelaksanaan'  => 'required',
            'status'          => 'required',
            'pembahasan' => 'required'
         ]);
   		Agenda::find($id)->update($request->all());
   		return redirect()->route('admin.agenda');
   	}

   	public function destroy($id){
   		Agenda::find($id)->delete();
   		return redirect()->route('admin.agenda');
   	}

 
}
