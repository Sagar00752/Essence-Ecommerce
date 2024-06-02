<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\item;
use App\Models\product;
use  App\Models\category;
use App\Models\wishlist;
use App\Models\cart;
use Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function showdata(Request $req){
        $item=item::get();
        return response()->json([
            "item"=>$item
        ]);
    }
}
