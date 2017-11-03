<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use Auth;
use Session;
use App\Agenda;

class AnotherNewsController extends Controller
{
    	public function show($id){

   		$data = News::find($id);
   		

   		if ($data->id_agenda==0) {
   			$agenda=0;
   			$temp=0;
   			return view('portal.portalberita',['data' => $data, 'agenda' => $agenda, 'temp'=> $temp]); 
   		}
   		else{
   			//jika ada relasi antar tabel agenda 
   			$agenda = Agenda::find($data->id_agenda);
   			$temp=1;
   		    return view('portal.portalberita',['data' => $data, 'agenda' => $agenda, 'temp'=> $temp]); 
   		}
   		
   	}

}
