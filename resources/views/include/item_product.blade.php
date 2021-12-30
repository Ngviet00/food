@php
    $cart = session()->get('cart');
@endphp
<div style="padding-bottom:4em;" class="custom_container">
    @foreach ($list_categories as $value)
    <div class="wp_product" id="{{$value->slug}}">
        <h2 class="mb-8 font-bold text-3xl pt-4">#{{$value->name}}</h2>
        <div class="box_flex flex flex-wrap justify-between">
            @foreach ($value->product as $product)
                @if(isset($cart[$product->id]))
                    <div class="item_product cursor-pointer relative rounded overflow-hidden shadow-lg bg-white text-center mb-4" id="{{$product->id}}">
                        <img id="img_product" class="w-full" src="{{$product->image}}" alt="img">
                        <div class="px-6 py-4">
                            <div class="text-neutral-300 font-bold" style="color: #414042;min-height: 32px;">{{$product->name}}</div>
                            <small class="text-orange-600 font-bold mt-1 inline-block">{{number_format($product->price)}}</small><span class="text-orange-600 text-xs font-bold mt-1">đ</span>
                            <p class="short_desc text-gray-700 text-base py-2 ">
                                {{$product->short_desc}}
                            </p>
                        </div>
                        <button id="btn_buy" class="bg-red-900 hover:bg-red-900 text-white font-bold py-2 px-4 rounded-full">
                            Đã chọn
                        </button>
                    </div>
                @else
                    <div class="item_product click_item cursor-pointer relative rounded overflow-hidden shadow-lg bg-white text-center mb-4" id="{{$product->id}}">
                        <img id="img_product" class="w-full" src="{{$product->image}}" alt="img">
                        <div class="px-6 py-4">
                            <div class="text-neutral-300 font-bold" style="color: #414042;min-height: 32px;">{{$product->name}}</div>
                            <small class="text-orange-600 font-bold mt-1 inline-block">{{number_format($product->price)}}</small><span class="text-orange-600 text-xs font-bold mt-1">đ</span>
                            <p class="short_desc text-gray-700 text-base py-2 ">
                                {{$product->short_desc}}
                            </p>
                        </div>
                        <button id="btn_buy" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">
                            Chọn mua
                        </button>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    @endforeach
</div>