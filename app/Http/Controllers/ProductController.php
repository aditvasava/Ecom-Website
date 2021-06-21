<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;

class ProductController extends Controller
{
    function index()
    {
        $data=Product::all();
       return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data=Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
        $data= Product::where('name','like','%'.$req->input('q').'%')->get();
        return view('search',['products'=>$data]);
    }

    function addtocart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->prodid;
           $cart->save();
           return redirect('/');
        }
    }

    static function cartitem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }

    function cart()
    {
        $userId=Session::get('user')['id'];
       $product= DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')->get();
        return view('cart',['products'=>$product]);
    }

    function remove($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }

    function order()
    {
        $userId=Session::get('user')['id'];
        $products=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->sum('products.price');
        $total  = $products;
        return view('order',['total'=>$total]);
    }

    function ordersuccess(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="Your order will be delivered soon";
             $order->payment_method=$req->pay;
             $order->payment_status="Done";
             $order->address=$req->addr;
             $order->save();
             Cart::where('user_id',$userId)->delete();
         }
         $req->input();
         return redirect('/');
    }
    function orderplaced()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')->join('products','orders.product_id','=','products.id')->where('orders.user_id',$userId)->get();
        return view('orderplaced',['orders'=>$orders]);
    }
    /*------------------------------ Display of clicked links -----------------------------*/
    function mobile()
    {
      $data= Product::where('category','like','Mobile')->get();
      return view('allsearch',['products'=>$data]);
    }
    function fridge()
    {
      $data= Product::where('category','like','fridge')->get();
      return view('allsearch',['products'=>$data]);
    }
    function tv()
    {
      $data= Product::where('category','like','TV')->get();
      return view('allsearch',['products'=>$data]);
    }
    function ac()
    {
      $data= Product::where('category','like','ac')->get();
      return view('allsearch',['products'=>$data]);
    }
    function wm()
    {
      $data= Product::where('category','like','Washing Machine')->get();
      return view('allsearch',['products'=>$data]);
    }
    function m()
    {
      $data= Product::where('category','like','other')->get();
      return view('allsearch',['products'=>$data]);
    }
    function laptop()
    {
      $data= Product::where('category','like','laptop')->get();
      return view('allsearch',['products'=>$data]);
    }
}
