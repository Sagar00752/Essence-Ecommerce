<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\item;
use App\Models\product;
use  App\Models\category;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\cart;

class CartController extends Controller
{
    public function addtocart(Request $request){
        $cartid=$request->cartid;
        $size=$request->size;
        $quantity=$request->quantity;
        $items=item::where('id',$cartid)->first();
        $cartlist= new cart;
        $userid=Auth::user()->id;
        $cartlist->user_id=Auth::user()->id;
        $cartlist->product_id=$items['product_id'];
        $cartlist->item_id=$items['id'];
        $cartlist->discount=$items['discount'];
        $cartlist->product_name=$items['product_name'];
        $cartlist->product_desc=$items['product_desc'];
        $cartlist->color=$items['color'];
        $cartlist->price=$items['price'];
        $cartlist->image=$items['image'];
        $cartlist->brand=$items['brand'];
        $cartlist->size=$size;
        $cartlist->quantity=$quantity;
        $cartlist->save();
        $cart=cart::get();
        $cart1=cart::where('user_id',$userid)->count();
        $discount=cart::where('user_id',$userid)->get('discount');
        $cartcount=cart::where('user_id',$userid)->count();
        $c_sum=cart::where('user_id',$userid)->sum('price');
        return  response()->json([
            "cart"=>$cart,
            "cart1"=>$cart1,
            "discount"=>$discount,
            "c_sum"=>$c_sum
        ]);
    }
    public function cartdisplay(){
        $cart=cart::get();
        return  response()->json([
            "cart"=>$cart,
            'count'=>count($cart),
         ]);
    }
    public function cartdel(Request $request){
        $cartdel=$request->cartdel;
        $del=cart::find($cartdel)->delete();

    }




}
