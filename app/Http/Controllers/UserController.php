<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;
use App\News;

class UserController extends Controller
{
    public function getSignin(){
      if (Auth::check()) {
         return redirect()->route('home.index');
         //untuk redirect admin apabila dia 
         //coba2 aksesk sendiri halaman signin ,
         //maka lgsg redirect ke halaman utama. 
      }

    	return view('admin.signin');
    }

    public function postSignin(Request $request){
      $this->validate($request, [
            'email'     => 'email|required',
            'password'  => 'required|min:4'
         ]);

      if(Auth::attempt(['email'=> $request->input('email'),'password'=>$request->input('password')]))
         {
             if (Session::has('oldUrl')){
                 $oldUrl = Session::get('oldUrl');
                 Session::forget('oldUrl');
                 return redirect()->to($oldUrl);
             }
         return redirect()->route('admin.profile'); //bila login sukses ke halaman profile
         }

         else{
             return redirect()->back(); //kalo gagal refresh ulang 
         }
        
   }

   public function getProfile(){ //ke halaman profile
   	$data = News::all();
      return view('admin.profile')->with('data',$data);
   }

   public function getLogout(){
   	 Auth::logout();
   	 return redirect()->route('admin.signin');
   }


}
