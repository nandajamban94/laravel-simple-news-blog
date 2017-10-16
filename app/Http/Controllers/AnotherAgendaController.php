<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agenda;

class AnotherAgendaController extends Controller
{
   public function getIndex(){
    	$data= Agenda::all(); //ambil semua berita
    	return view('portal.portalagenda')->with('data',$data);
    }

    public function show($id){
   		$data = Agenda::find($id);
   		return view('portal.publicdetailagenda')->with('data',$data);
   	}

   	public function showAgenda(){
   		$data = Agenda::all();
   		return view('portal.agenda')->with('data',$data);
   	}

}
