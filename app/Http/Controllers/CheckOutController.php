<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\item;
use App\Models\product;
use  App\Models\category;
use  App\Models\checkout;
use App\Models\cart;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
public function checkoutdata(Request $request){
    $firstname=$request->firstname;
    $lastname=$request->lastname;
    $cmpname=$request->cmpname;
    $country=$request->country;
    $postcode=$request->postcode;
    $city=$request->city;
    $state=$request->state;
    $phonenumber=$request->phonenumber;
    $emailaddress=$request->emailaddress;
    $address=$request->address;
    $checkout= new checkout;
    $checkout->user_id=Auth::user()->id;
    $checkout->firstname=$firstname;
    $checkout->lastname=$lastname;
    $checkout->country=$country;
    $checkout->address=$address;
    $checkout->postcode=$postcode;
    $checkout->city=$city;
    $checkout->state=$state;
    $checkout->phoneno=$phonenumber;
    $checkout->email=$emailaddress;
    $checkout->save();
    $items =item::get();
    $checkout1=checkout::get();
     return  response()->json([
            "item"=>$items,
            "checkout1"=>$checkout1,
        ]);

}
public function checkout(Request $request){
    $userid=Auth::user()->id;
    $cart=cart::get();
    $cartid=$request->cartid;
    $discount=cart::where('user_id',$userid)->get('discount');
    return  response()->json([
        "cart"=>$cart,
        "discount"=>$discount,
    ]);

}
}
