<h2 class="text-orange-600 font-extrabold uppercase text-2xl text-center pt-10 mb-3">Danh mục sản phẩm</h2>
<div style="position: sticky;top:0;z-index:100;padding:15px;background-color: #f3efef;">
    <div class="custom_container flex justify-between my-7">
        @foreach ($list_categories as $value)
            <a href="#{{$value->slug}}" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                {{$value->name}}
            </a>
        @endforeach
    </div>
</div>