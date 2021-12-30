@extends('layouts.app')
@section('content')
@include('include.slide')

<div class="container-xl product_main">

    @include('include.how_to_order')

    @include('include.list_category')

    @include('include.item_product')

    <div style="z-index:200" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="large-modal">
        <div class="relative px-4 w-full max-w-4xl h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Chọn sản phẩm
                    </h3>
                    <button id="btn_close" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="flex">
                        <div class="prd_image" style="flex-basis: 40%;">
                            <p class="id_product hidden"></p>
                            <p class="name_product font-bold my-3 text-lg text-orange-700 animate-pulse">GREEN GARDEN SALAD</p>
                            <p class="leading-5 short_desc_product">Salát với xà lách, cà chua, dưa chuột, hành tây, trộn xốt dầu dấm đặc biệt của Al Fresco's.</p>
                            <img class="block mx-auto img_product" width="300" src="/image/300x300.png" alt="logo">
                            <p class="price_product font-bold mt-2 mb-3 text-center text-lg text-orange-700">70.000</p>
                            <p class="fake_price hidden">10.000</p>
                            <div class="custom-number-input h-10 w-32 mx-auto">
                                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                    <button data-action="decrement" class="btn_minus bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">−</span>
                                    </button>
                                    <input type="number" class="input_number outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="1" min="1"></input>
                                    <button data-action="increment" class="btn_plus bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="prd_info pl-10" style="flex-basis: 60%;">
                            <div class="topping">
                                <label for="" class="mb-2 inline-block label_topping font-bold hidden">Thêm</label>
                                <div class="flex flex-wrap data_topping mt-4">
                                </div>
                            </div>
                            <div class="note">
                                <label for="message" class="block mb-2 font-bold">Ghi chú</label>
                                <textarea id="message" rows="4" col="50" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a message..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn_add_cart text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button onclick="topFunction()" class="bg-orange-700 hidden rounded-lg" id="btn_to_top" title="Go to top">Top</button>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.btn_add_cart').click(function() {
            var id_product = $('.id_product').text();
            var name_product = $(".name_product").text();
            var qty = $('.input_number').val();
            var price = $(".fake_price").text();
            var img = $('.img_product').attr('src');
            var message = $('#message').val();
            var total_topping = 0;
            var list_topping = $('.check_box:checked').map(function() {
                total_topping = total_topping + Number(this.value);
                return this.name + '-' + this.value;
            }).get().join(', ');

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'add_to_cart',
                data: {
                    id_product: id_product,
                    name_product: name_product,
                    qty: qty,
                    price: price,
                    img: img,
                    message: message,
                    total_topping: total_topping,
                    list_topping: list_topping,
                },
                success: function(response) {
                    alert('Thêm sản phẩm thành công!');
                    window.location.reload();
                },
                error: function(err) {
                    console.log('Thêm sản phẩm thất bại.');
                }
            });
        });

        $("#btn_close").click(function() {
            clearData();
        });

        $(".click_item").click(function(event) {
            var id = $(this).attr("id");
            $('.id_product').text(id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: 'product/' + id,
                success: function(response) {
                    $(".name_product").text(response.convert_product[0]['name']);
                    $(".short_desc_product").text(response.convert_product[0]['short_desc']);
                    $(".img_product").attr("src", response.convert_product[0]['image']);
                    $(".price_product").text(formatCurrent(response.convert_product[0]['price']));
                    $(".fake_price").text(formatCurrent(response.convert_product[0]['price']));
                    if (response.list_toppings.length > 0) {
                        $(".label_topping").show();
                        var data_topping = "";
                        $.each(response.list_toppings, function(index, value) {
                            data_topping = data_topping + "<div class='mb-4 mr-4 t_ping'>";
                            data_topping = data_topping + "<label class='inline-flex items-center'>";
                            data_topping = data_topping + "<input type='checkbox' id='id-" + value.id + "' name='" + value.name + "' value='" + value.price + "' class='form-checkbox text-orange-500 check_box'>";
                            data_topping = data_topping + "<span class='ml-2'>" + value.name + " (" + formatCurrent(value.price) + ")</span>đ";
                            data_topping = data_topping + "</label>";
                            data_topping = data_topping + "</div>";
                        });
                        $(".data_topping").html(data_topping);
                    }
                    toggleModal('large-modal', true);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        function clearData() {
            toggleModal('large-modal', false);
            $(".input_number").val(1);
            $(".t_ping").remove();
            $(".label_topping").hide();
        }

        function formatCurrent(number) {
            let value = number.toString();
            let _value = value.replace(',', '.');
            return _value;
        }

        $(".btn_minus").click(function(e) {
            e.preventDefault();
            var number = Number($('.input_number').val());
            if (number <= 1) {
                return;
            }
            var _number = number - 1;
            $('.input_number').val(_number);
            var fake_price = Number($('.fake_price').text().replace('.', ''));
            var total = (fake_price * _number);
            $('.price_product').text(new Intl.NumberFormat().format(total));
        });

        $(".btn_plus").click(function(e) {
            e.preventDefault();
            var fake_price = Number($('.fake_price').text().replace('.', ''));
            var number = Number($('.input_number').val()) + 1; // so luong
            if (number > 6) {
                return;
            }
            $('.input_number').val(number);
            var total = (fake_price * number);
            $('.price_product').text(new Intl.NumberFormat().format(total));
        });

        var mybutton = document.getElementById("btn_to_top");

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    @endsection