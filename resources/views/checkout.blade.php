@extends('layouts.app')

@section('content')
<div class="container px-15 mx-auto">
    <nav class="flex py-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/" class="inline-flex items-center text-sm text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Trang chủ
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Thanh toán</a>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex flex-col w-full px-0 mx-auto md:flex-row">

        @if(session('cart'))
        <div class="flex flex-col md:w-full">
            <div>
                <form action="{{ route('submit_order') }}" method="post">
                    @csrf
                    <div class="space-x-0 lg:flex lg:space-x-4">
                        <div class="w-full lg:w-1/2">
                            <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">Họ tên người nhận</label>
                            <input name="name" value="" type="text" placeholder="Họ tên" class="name w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="w-full lg:w-1/2 ">
                            <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">Số điện thoại người nhận</label>
                            <input name="phone" value="" type="text" placeholder="Số điện thoai" class="phone w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>

                    </div>

                    <div class="space-x-0 lg:flex lg:space-x-4">
                        <div class="w-full lg:w-1/3">
                            <label for="" class="my-3 block text-bold">Tỉnh/Thành phố</label>
                            <select id="province" style="width: 200px;padding: 10px 0px;border: 1px solid black;">
                                <option value="TP_Bắc Ninh">Thành phố Bắc Ninh</option>
                            </select>
                        </div>

                        <div class="w-full lg:w-1/3">
                            <label for="" class="my-3 block text-bold">Phường</label>
                            <select style="width: 160px;padding: 10px 0px;border: 1px solid black;" id="district" name="district">
                                <option value="">--Chọn--</option>
                                @foreach($list_districts as $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full lg:w-1/3">
                            <label for="" class="my-3 block text-bold">Khu</label>
                            <select id="ward" style="width: 200px;padding: 10px 0px;border: 1px solid black;">
                                <option value="">--Chọn--</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="w-full">
                            <label for="Address" class="block mb-3 text-sm font-semibold text-gray-500">Số nhà/Tên đường</label>
                            <textarea id="address" class="w-full px-4 py-3 text-xs border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600" name="Address" cols="20" rows="4" placeholder="Address"></textarea>
                        </div>
                    </div>

                    <div class="relative pt-3 xl:pt-6"><label for="note" class="block mb-3 text-sm font-semibold text-gray-500"> Notes
                            (Optional)</label>
                            <textarea name="note" id="note"  class="flex items-center w-full px-4 py-3 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-600" rows="4" placeholder="Notes for delivery"></textarea>
                    </div>
                    <div class="mt-4">
                        <button class="btn_submit w-full px-6 py-3 text-white bg-orange-600 flex items-center">
                            <span id="span_loading" style="display:none; border-top-color:transparent" class="inline-block w-8 h-8 border-4 border-white border-solid rounded-full animate-spin"></span>
                            <span style="flex-grow:1">Đặt hàng</span>    
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-col w-full ml-0 lg:ml-12 lg:w-2/5">
            <div class="pt-12 md:pt-0 2xl:ps-4">
                <h2 class="text-xl font-bold">Đơn hàng
                </h2>
                <div class="mt-8">
                    <div class="flex flex-col space-y-4">
                        @php $total = 0 @endphp
                        @foreach(session('cart') as $value)
                        @php $total = $total + (int)str_replace('.', '', $value['price']) * (int)$value['qty'] + (int)$value['total_topping']; @endphp

                        <div class="flex space-x-4">
                            <div>
                                <img src="{{$value['img']}}" alt="image" width="80">
                            </div>
                            <div>
                                <h2 class="text-sm font-bold">{{$value['name_product']}}</h2>
                                <p class="text-sm inline-block">Topping: {{number_format($value['total_topping']) }}đ</p>
                                <p class="text-sm my-1 text-bold">Qty: {{$value['qty']}}</p>
                                <span class="text-sm">Price: {{number_format($value['price'])}}đ</span>
                                <p class="text-sm my-1 text-bold">Total: {{ number_format((int)$value['qty'] * (int)$value['price'] + (int)$value['list_topping'])}}đ</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex p-4 mt-4">
                    <h2 class="text-xl font-bold">Tổng tiền: {{number_format($total)}}đ</h2>
                </div>
            </div>
        </div>
        @else
        <div class="mt-3" style="min-height:400px">
            <b>Bạn không có sản phẩm nào trong giỏ hàng, <a href="/" class="text-red-600">Mua ngay.</a></b>
        </div>
        @endif
    </div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.btn_submit').click(function(e){
        e.preventDefault();
        var name = $('.name').val();
        var phone = $('.phone').val();
        var province = $('#province option:selected').text();
        var district = $('#district option:selected').text();
        var ward =$('#ward option:selected').text();
        var address = $('#address').val();
        var note = $('#note').val();

        if(name == '' || phone == '' || address == ''){
            alert("Bạn vui lòng nhập đấy đủ họ tên,số điện thoại và địa chỉ của người nhận!");
            return false;
        }
        if(district == '--Chọn--'){
            alert("Bạn chưa chọn phường!");
            return false;
        }
        $.ajax({
            url: 'submit_order',
            type: "post",
            dataType: "json",
            beforeSend: function(){
                $("#span_loading").show();
            },
            data: {
                name: name,
                phone: phone,
                province : province,
                district: district,
                ward: ward,
                address: address,
                note: note,
            },
            success: function(result) {
                alert("Đặt hàng thành công!");
                window.location.href="/";
            },
            error: function(err) {
                console.log(err);
            },
            complete:function(data){
                $("#span_loading").hide();
            }
        });
    })

    $('#district').change(function() {
        var id_district = $(this).val();

        if (id_district == '') {
            var data = "<option value=''>--Chọn--</option>";
            $('#ward').html(data);
            return;
        }

        $.ajax({
            url: 'get_ward/' + id_district,
            type: "post",
            dataType: "json",
            data: {
                id_district: id_district
            },
            success: function(result) {
                var data = "";
                $.each(result, function(key, value) {
                    data = data + "<option value='" + value.id + "'>" + value.name + "</option>";
                });
                $('#ward').html(data);
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
    
</script>
@endsection