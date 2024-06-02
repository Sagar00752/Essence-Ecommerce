<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
// use app\Mail\MailNotify;
use App\Mail\MailNotify;



class MailController extends Controller
{
    public function mail(){

        $data =[
        'subject'=>'hi this sagar gaikwad',
        'body'=>'please pay your loan'
        ];
        try{
            Mail::to('sagargaikwad.p@theswipewire.com')->send(new MailNotify($data));
            return response()->json(['Great check your mail box']);
        }catch(Exception $th){
            return response()->json(['sorry something went wrong']);
        }
    }

}
