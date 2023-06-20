<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
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

}
