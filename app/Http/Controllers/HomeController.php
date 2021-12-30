<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\District;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Slide;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $list_slides = Slide::paginate(3);
        $list_categories = Category::all();
        return view('home', compact('list_slides', 'list_categories'));
    }
    public function check_out()
    {
        $list_districts = District::all();
        return view('checkout', compact('list_districts'));
    }

    public function get_ward(Request $request)
    {
        $list_ward_by_id_district = Ward::where('district_id', $request->id_district)->get();
        return response()->json($list_ward_by_id_district);
    }
    public function submit_order(Request $request)
    {
        $order = Order::create([
            'user_id' => Auth()->id(),
            'name' => $request->name,
            'phone' => $request->phone,
            'province' => $request->province,
            'district' => $request->district,
            'ward' => $request->ward,
            'note' => $request->note
        ]);

        foreach (session('cart') as $value) {
            OrderDetail::create([
                'order_id' => $order->id,
                'name_product' => $value['name_product'],
                'image' => $value['img'],
                'price' => $value['price'],
                'qty' => $value['qty'],
                'total_topping' => $value['total_topping'],
                'list_topping' => $value['list_topping'],
                'note' => $value['message']
            ]);
        }
        $cart = [];
        session()->put('cart', $cart);
        return response()->json($cart);
    }
    public function ordered()
    {
        $ordered = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->select('order_details.*')
            ->where('users.id',Auth()->id())
            ->orderBy('id','desc')
            ->get();
        return view('ordered',compact('ordered'));
    }
}
