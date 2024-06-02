<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\item;
use App\Models\product;
use  App\Models\category;
use Illuminate\Http\Request;
use Hash;

class LoginController extends Controller
{
    public function register1(){
        return view('Register');
    }
    public function register2(Request $request){
        $name1 =$request->nam;
        $email1 =$request->email;
        $password1=$request->password;
        $phone2=$request->phone;
        $req=new User;
        $req->name=$name1;
        $req->password = Hash::make($password1);
        $req->phone=$phone2;
        $req->email=$email1;
        $req->save();
       }
       public function login(){
        return view('login');
       }
       public function loginpass(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
          ];
          if(Auth::attempt($credentials)){
            $status = 200;
          }else{
            $status = 201;
          }
          return response()->json([
            'status' => $status
          ]);
       }
       public function logout(){

        $url = route('login');
        Auth::logout();
        return Response()->json(['status' => 200, 'message' => "Logout Success", 'url' => $url]);

       }


}
