<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart');
    }
    public function add_to_cart(Request $request){
          
        $cart = session()->get('cart', []);

        $cart[$request->id_product] = [
             'id_product' => $request->id_product,
             'img' => $request->img,
             'message' => $request->message,
             'name_product' => $request->name_product,
             'price' => (int)str_replace('.', '', $request->price),
             'qty' => $request->qty,
             'total_topping' => $request->total_topping,
             'list_topping' => $request->list_topping,
        ];

        session()->put('cart', $cart);
        return response()->json('success');
    }
    public function delete_item_cart($id){
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return response()->json($cart);
    }
    public function delete_all_cart(){
        $cart = [];
        session()->put('cart', $cart);
        return response()->json($cart);
    }
    public function update_cart(Request $request){
        $cart = session()->get('cart');
        $cart[$request->id]["qty"] = $request->number;
        session()->put('cart', $cart);
        return response()->json($cart);
    }
}
