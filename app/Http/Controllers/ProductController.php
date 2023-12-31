<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class ProductController extends Controller
{
        function index(){
            $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        
        $data = Product::find($id);
        return view('detail' ,['product'=>$data]);
    }

    function addToCart(Request $req){
        
        if($req->session()->has('user')){
           $cart = new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id= $req->product_id;
           $cart->save();
           return redirect('/');

            
        }else{
            return redirect('/login');
        }
        
    }

    static function cartItem(){
        $user=Session::get('user');
        if($user == null){
            return 0;
        }
    
        return Cart::where('user_id',$user['id'])->count();

    }

    function cartList(){
        $userId = Session::get('user')['id'];
         $products = DB::table('cart')
         ->join('products', 'cart.product_id', '=' , 'products.id')
         ->where('cart.user_id',$userId)
         ->select('products.*' , 'cart.id as cartId')->get();
         return view('cartlist', ['products' => $products]);
        
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');

    }
     
    function orderNow(){
        $userId = Session::get('user')['id'];
         $total = DB::table('cart')
         ->join('products', 'cart.product_id', '=' , 'products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
         return view('ordernow', ['total' => $total]);
    }

    function orderplace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach ($allCart as $cart) {
           $order = new Order();
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->status="Pending";
           $order->payment_method=$req->payment;
           $order->address=$req->address;
           $order->payment_status="Pending";
           $order->save();
           Cart::where('user_id',$userId)->delete(); 

        }
        return redirect('/')->with('success','Order Placed Successfully!');
        

    }

    function orderList(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
         ->join('products', 'orders.product_id', '=' , 'products.id')
         ->where('orders.user_id',$userId)
         ->get();
         return view('orderlist', ['orders' =>  $orders]);
    }

}
 