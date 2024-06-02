<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\item;
use App\Models\product;
use  App\Models\category;
use  App\Models\wishlist;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class WishListController extends Controller
{
    public function wishlist(){
          return view('wishlist');
    }
    public function wishlistpost(Request $request){
        $val=$request->val;
        $wishid=$request->wishid;
        $user=Auth::user()->id;
        if($val==1){
            $items=item::where('id',$wishid)->first();
            $wishlist = new wishlist;
            $wishlist->user_id=Auth::user()->id;
            $wishlist->product_id=$items['product_id'];
            $wishlist->item_id=$items['id'];
            $wishlist->product_name=$items['product_name'];
            $wishlist->product_desc=$items['product_desc'];
            $wishlist->color=$items['color'];
            $wishlist->price=$items['price'];
            $wishlist->image=$items['image'];
            $wishlist->brand=$items['brand'];
            $wishlist->wishlist_status=1;
            $wishlist->save();
        }
        else{
           $delete= wishlist::where('user_id',$user)->where('id',$wishid)->delete();
        }

    }
    public function whishlistfns(Request $request){
        $user=Auth::user()->id;

        $wishlist=wishlist::where('user_id',$user)->get();
        return  response()->json([
            "count"=>count($wishlist),
            "wishlist"=>$wishlist,
        ]);

    }
}
