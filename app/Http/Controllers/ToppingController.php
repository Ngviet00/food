<?php

namespace App\Http\Controllers;

use App\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ToppingController extends Controller
{
    public function index()
    {
        $list_toppings = Topping::orderBy('id', 'desc')->paginate(6);
        return view('admin.Topping.index',compact('list_toppings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Topping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topping = new Topping;
        $topping->name = $request->name;
        $topping->slug = Str::slug($request->name);
        $topping->price = $request->price;
        $topping->save();
        return redirect()->route('topping.index')->with('mes','Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function show(Topping $topping)
    {
        // echo $topping->id;
        return view('admin.Topping.edit');
        // $t_ping = Topping::findOrFail($topping->id);
        // return view('admin.Topping.edit',compact('t_ping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function edit(Topping $topping)
    {
        $tping = Topping::findOrFail($topping->id);
       return view('admin.Topping.edit',compact('tping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topping $topping)
    {
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
        ];
        DB::table('toppings')->where('id', $topping->id)->update($data);
        return redirect()->route('topping.index')->with('msg','update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topping  $topping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topping $topping)
    {
        Topping::destroy($topping->id);
        return redirect()->route('topping.index')->with('msg','delete successfully');
    }
}
