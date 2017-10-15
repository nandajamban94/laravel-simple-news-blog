<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use Auth;
use Session;

class AnotherNewsController extends Controller
{
    	public function show($id){
   		$data = News::find($id);
   		return view('portal.portalberita')->with('data',$data);
   	}

}
