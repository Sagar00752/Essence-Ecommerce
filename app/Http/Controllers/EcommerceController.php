<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\item;
use App\Models\product;
use  App\Models\category;
use App\Models\wishlist;
use App\Models\cart;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function blog(){
        return view('blog');
    }


    public function checkout(){
        return view('checkout');
    }


    public function index(){
        return view('index');
    }

    public function regular(){
        return view('regular-page');
    }

    public function single(){
        return view('single-blog');
    }
    public function product(){
        return view('single-product-details');
    }
    public function contact(){
        return view('contact');
    }



//    public function additem(){
//     return view('additem');
//    }
   public function addeditem(Request $request){

    $product=$request->products;//ajax for registering all product
    $brand=$request->brand;
    $productname=$request->pname;
    $productdis=$request->productdiscription;
    $price=$request->price;
    $color=$request->color;
    $discount=$request->discount;
    $image=$request->image;
    $wishlist=$request->wishlist;
    $item=$request->dress;

    $req=new item;
    $filename="";
    if($request->hasFile('image'))
    {
      $file=$request->file('image');
      $ext=$file->getClientOriginalExtension();
      $filename=time().'.'.$ext;
      $req->image=$filename;
      $file->move('img',$filename);
      $req->save();
    }

    $req->products=$product;
    $req->brand=$brand;
    $req->product_name=$productname;
    $req->product_desc=$productdis;
    $req->price=$price;
    $req->color=$color;
    $req->discount=$discount;
    $req->wishlist_status=$wishlist;
    $req->product_id=$item;
    $req->save();
    // /return $filename;
    return "successfully stored";

   }
   public function postdata(Request $request)
{
    $color12 = $request->color12;
    $id = $request->id;
    $sort = $request->sort;
    $brand = $request->brand;
    $search = $request->search;
    $start=$request->start;
    $end=$request->end;
    $user=Auth::user()->id;
    $wishlist=wishlist::where('user_id',$user)->get();
    $query = item::query();

    if ($id != 'all') {
        $query->where('product_id', $id);
    }

    if ($color12 != 'none') {
        $query->where('color', $color12);
    }

    if ($sort == 'Newest') {
        $query->orderBy('created_at', 'asc');
    } elseif ($sort == "Price: high to low") {
        $query->orderBy('price', 'desc');
    } elseif ($sort == 'Price: low to high') {
        $query->orderBy('price', 'asc');
    }

    if ($brand != 'all') {
        $query->where('product_id', $brand);
    }

    if ($search != "") {
        $query->where('product_name', 'LIKE', '%' . $search . '%');
    }
    if($start!=""){
        $query->whereBetween('price',[$start,$end]);
    }

    $query=$query->paginate(2);


    $wishliststatus = wishlist::where('user_id',$user)->select('wishlist_status')->get();
    return response()->json([
        "count1"=>count($wishlist),
        "item" => $query,
        "wishliststatus" => $wishliststatus,
        "count"=>count($query)
    ]);
}


 public function addproduct(){
    return view('product');
 }
public function addelement(Request $request){
$addproduct=$request->product1;//this ajax is used to register the type of item like jenes shirt
$request=new category;
$request->dresses=$addproduct;
$request->save();
}
public function showele(){
  $items =category::get();//used to pass all the da
    return view('additem',compact('items'));
}
public function showbrand(){
    $items =item::get();//it is used to get catgeory and brands in front end
    $dress =category::get();
    $carts=cart::get();

    // dd(Auth::user()->id);

      return view('shop',compact('items','dress','carts'));
}
public function postorderdata(){
    $userid=Auth::user()->id;
    $cart1=cart::where('user_id',$userid)->count();
    $discount=cart::where('user_id',$userid)->get('discount');
    $cartcount=cart::where('user_id',$userid)->count();
    $c_sum=cart::where('user_id',$userid)->sum('price');
    return response()->json([
        "discount"=>$discount,
        "c_sum"=>$c_sum
    ]);
}

}


