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
                        <a class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Đơn hàng đã đặt</a>
                    </div>
                </li>
            </ol>
        </nav>
        @if(count($ordered)>0)
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
                                        <span class="sr-only">Trạng thái</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ordered as $value)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value->name_product }}
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <img width="100" src="{{$value->image}}" alt="">
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ number_format($value->price) }}đ
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400" style="width:180px">
                                            <p class="mb-1">{{$value->qty}}</p> 
                                            @if($value->note !='')
                                                <b class="mt-1 block" style="line-height: 20px;">Ghi chú: {{ $value->note }}</p>
                                            @endif
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400" width="190">
                                            @if($value->list_topping !='')
                                                <p class="leading-5">{{ $value->list_topping }}</p>
                                            @else
                                                <p>Không</p>
                                            @endif
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ number_format((int)str_replace('.', '', $value->price) * (int)$value->qty + (int)$value->total_topping) }}đ
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            @if($value->status == 0)
                                                <span class="text-red-700 w-full block">Đang giao hàng</span>
                                            @else
                                                <span class="text-green-600">Đã giao</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="mt-3" style="min-height:400px">
                <b>Bạn chưa có đơn hàng nào, <a href="/" class="text-red-600">Mua ngay.</a></b>
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
</script>
@endsection