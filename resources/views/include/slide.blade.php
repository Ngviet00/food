<div class="carousel relative bg-white">
    <div class="carousel-inner relative overflow-hidden">
         @foreach($list_slides as $key => $value)
            @if($key == 0)
                <input class="carousel-open-0" type="radio" id="carousel-0" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:75vh;">
                    <img width="100%" src="https://api.alfrescos.com.vn//uploads/images/PC_ALF-APP-VN.jpg" style="height:100%;" alt="logo">
                </div>
                <label for="carousel-2" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-500 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-500 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>            
            @elseif($key ==1)
                <input class="carousel-open-1" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:75vh;">
                    <img width="100%" src="https://api.alfrescos.com.vn//uploads/images/undefined-248.jpg" alt="logo">
                </div>
                <label for="carousel-0" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            @else
                <input class="carousel-open-2" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:75vh;">
                <img width="100%" src="https://api.alfrescos.com.vn//uploads/images/undefined-247.jpg" alt="logo">
                </div>
                <label for="carousel-1" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-0" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            @endif
        @endforeach
    </div>
</div>