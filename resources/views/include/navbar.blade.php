<div class="flex flex-col">
    <nav class="bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="/" class="flex items-center py-1">
                            <img src="/assets/logo.png" alt="logo" class="h-16 w-16 mr-2">
                            <span class="font-semibold text-gray-500 text-lg">Alfresh</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href="{{route('list_cart')}}" class="text-lg py-2 px-2 font-medium text-gray-500 rounded transition duration-300">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <span>
                                @php $count = 0; @endphp
                                @if(session('cart'))
                                @foreach(session('cart') as $value)
                                @php $count = $count + $value['qty']; @endphp
                                @endforeach
                                @endif
                                <small>Giỏ hàng({{$count}})</small>
                            </span>
                        </div>
                    </a>

                    @if(Route::has('login'))
                    @auth
                        <a href="{{route('ordered')}}" class="font-medium text-red-800 hover:underline">Đơn hàng đã mua</a>
                        <button style="outline:none" id="dropdownButton" data-dropdown-toggle="dropdown" class="font-medium rounded-lg text-sm py-2.5 text-center inline-flex items-center" type="button">
                            <b>Chào, {{ Auth::user()->name }}</b>
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    @else
                    <a href="{{ route('login') }}" class="py-2 px-2 font-medium text-gray-500 rounded transition duration-300">Log In</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white bg-orange-500 rounded transition duration-300">Sign Up</a>
                    @endif
                    @endauth
                    @endif
                    <div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                        <ul class="py-1" aria-labelledby="dropdownButton">
                            <li>
                                <a href="{{ route('logout') }}" class="no-underline block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>