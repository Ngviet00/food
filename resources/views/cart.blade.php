@extends('layouts.app')

@section('content')

<div class="container-xl cart" style="min-height: 400px;">
    <div class="max-w-6xl mx-auto px-4">
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
                        <a class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Giỏ hàng</a>
                    </div>
                </li>
            </ol>
        </nav>
        @if(session('cart'))
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-md sm:rounded-lg">
                        <table class="min-w-full">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Tên sản phẩm
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Hình ảnh
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Giá
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Số lượng
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Topping
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Thành tiền
                                    </th>
                                    <th scope="col" class="relative py-3 px-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0 @endphp
                                    @foreach(session('cart') as $value)
                                        @php $total = $total + (int)str_replace('.', '', $value['price']) * (int)$value['qty'] + (int)$value['total_topping']; @endphp 
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td class="id_product hidden">{{$value['id_product']}}</td>
                                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{$value['name_product']}}
                                            </td>
                                            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <img width="100" src="{{$value['img']}}" alt="">
                                            </td>
                                            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ number_format($value['price']) }}đ
                                            </td>
                                            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <div class="custom-number-input h-10 w-32">
                                                    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                        <button id="{{ $value['id_product'] }}" qty="{{ $value['qty'] }}" data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                            <span class="m-auto text-2xl font-thin">−</span>
                                                        </button>
                                                        <input type="number" id="qty-{{$value['id_product']}}" class="qty outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="{{$value['qty']}}"></input>
                                                        <button id="{{ $value['id_product'] }}" qty="{{ $value['qty'] }}" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                            <span class="m-auto text-2xl font-thin">+</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                @if($value['message'] !='')
                                                    <b class="mt-1 block">Ghi chú: {{$value['message']}}</p>
                                                @endif
                                            </td>
                                            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400" width="190">
                                                @if($value['list_topping'] !='')
                                                <p class="leading-5">{{ $value['list_topping'] }}</p>
                                                @else
                                                <p>Không</p>
                                                @endif
                                            </td>
                                            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ number_format((int)str_replace('.', '', $value['price']) * (int)$value['qty'] + (int)$value['total_topping']) }}đ
                                            </td>
                                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                <a href="#" id="{{$value['id_product']}}" class="btn_delete text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-between py-3">
                        <div>
                            <button type="button" class="delete_all_cart text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Xóa tất cả</button>
                        </div>
                        <div class="flex align content-center">
                            <a href="{{route('check_out')}}" class="block text-white bg-red-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Thanh toán</a>
                            <h2 class="text-right py-3 font-bold text-2xl">Tổng tiền: {{ number_format($total) }}đ</h2>
                        </div>
                    </div>
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
    $('.btn_delete').click(function() {
        var id = $(this).attr('id');
        var check = confirm("Bạn có muốn xóa sản phẩm này không?");
        if (check) {
            $.ajax({
                url: 'delete_item_cart',
                method: "POST",
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(err) {
                    alert('Xóa thất bại!');
                }
            });
        }
    });

    $('.delete_all_cart').click(function() {
        var check = confirm("Bạn có muốn xóa tất cả sản phẩm trong giỏ hàng không?");
        if (check) {
            $.ajax({
                url: 'delete_all_cart',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function(err) {
                    alert('Xóa thất bại!');
                }
            });
        }
    })

    $('button[data-action="decrement"]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('id');
        var _number = Number($(this).attr('qty'));
        
        if (_number <= 1) {
            return;
        }
        var number = _number - 1;
        $('#qty-'+id).val(number);
        $.ajax({
            url: 'update_cart',
            method: "PATCH",
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                number: number
            },
            success: function(response) {
                console.log(response);
                window.location.reload();
            },
            error: function(err) {
                alert('Xóa thất bại!');
            }
        });
    });

    $('button[data-action="increment"]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('id');
        var number = Number($(this).attr('qty')) + 1;
        $('#qty-'+id).val(number);

        $.ajax({
            url: 'update_cart',
            method: "PATCH",
            data: {
                _token: '{{ csrf_token() }}',       
                id: id,
                number: number
            },
            success: function(response) {
                console.log(response);
                window.location.reload();
            },
            error: function(err) {
                alert('Xóa thất bại!');
            }
        });
    });
</script>
@endsection