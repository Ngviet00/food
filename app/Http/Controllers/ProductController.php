<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Product_Topping;
use App\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $list_products = Product::with('category')->orderBy('id','desc')->paginate(10);
        return view('admin.Product.index', compact('list_products'));
    }
    public function create()
    {
        $list_categories = Category::all();
        $list_toppings = Topping::all();
        return view('admin.Product.create', compact('list_categories','list_toppings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ]);

        if($request->hasFile('image')){
            $name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public', $name);
            $path = '/'.str_replace("public","storage",$path);
        }

        $product = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $path,
            'price' => $request->price,
            'short_desc' => $request->short_desc,
            'category_id' => $request->category_id,
        ]);

        if(!empty($request->input('topping'))){
            $list_toppings = $request->input('topping');
            foreach($list_toppings as $value){
                Product_Topping::create([
                    'product_id' => $product->id,
                    'topping_id' => $value
                ]);
            }
        }
        return redirect()->route('product.index')->with('msg','Add successfully');
    }

    public function getProductById($id){

        $product = Product::where('id',$id)->get();
        
        $list_toppings = DB::table('products')
                        ->join('product_toppings', 'products.id','=','product_toppings.product_id')
                        ->join('toppings', 'toppings.id','=','product_toppings.topping_id')
                        ->select('toppings.*')
                        ->where('products.id', $id)
                        ->get();
        $convert_product = $product->map(function($item){
            return [
                'name' => $item->name,
                'short_desc' => $item->short_desc,
                'image' => $item->image,
                'price' => number_format($item->price),
            ];
        });

        return response()->json([
            'convert_product' => $convert_product,
            'list_toppings' => $list_toppings
        ]);
    }

    public function show($id)
    {
        
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        Product::where('id', $product->id)->delete();
        return redirect()->route('product.index')->with('msg','Delete successfully');
    }
    
}
