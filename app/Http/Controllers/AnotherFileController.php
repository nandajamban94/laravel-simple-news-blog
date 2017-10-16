<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\File;

class AnotherFileController extends Controller
{
    public function getIndex(){
    	$data = File::all();
    	return view('portal.produkhukum')->with('data',$data);
    }
}
