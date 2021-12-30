@extends('admin.layouts.app')
@section('content')

<div class="app-wrapper" style="margin-left: 0px;">
    <div class="app-content" style="padding-left: 0px !important;">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex">
                        <h1 class="app-page-title mb-0">Thêm sản phẩm</h1>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="text-danger">{{$error}}</div>
                @endforeach
            @endif
            <form method="POST" class="w-75" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <b>Name:</b>
                    <input value="{{ old('name') }}" type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <b>Price:</b>
                    <input value="{{ old('price') }}" type="text" class="form-control" name="price" id="price" required>
                </div>
                <div class="form-group">
                    <b>Mô tả ngắn:</b>
                    <textarea required class="form-control" id="short_desc" name="short_desc" id="short_desc" rows="3">{{ old('short_desc') }}</textarea>
                </div>
                <b>Danh mục:</b>
                <select class="custom-select" name="category_id" id="selectorID">
                    <option selected value="choose">--Chọn danh mục--</option>
                    @foreach($list_categories as $key => $value)
                        <option {{ old('category_id') == $value->id ? "selected" : "" }} value="{{$value->id}}">{{ $value->name }}</option>
                    @endforeach
                </select>
                <b class="d-block my-2">Topping:</b>
                <div class="list_topping d-flex flex-wrap">
                    @foreach($list_toppings as $value)
                    <div class="form-check mr-4 mb-2">
                        <input  
                                class="form-check-input" 
                                name="topping[]" 
                                type="checkbox" 
                                value="{{$value->id}}" id="{{$value->id}}"
                                {{ in_array($value->id, old("topping", [])) ? "checked" : "" }}
                        >
                        <label class="form-check-label" for="{{$value->id}}">
                            {{$value->name}} ({{number_format($value->price)}}đ)
                        </label>
                    </div>
                    @endforeach
                </div>
                <b>Hình ảnh:</b>
                <div id="img">
                    <div>
                        <img id="image_preview_container" src="" style="max-height: 150px;">
                    </div>
                    <div class="form-group">
                        <label for="image">Choose Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                    </div>
                </div>
                <button type="submit" class="btn_submit btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#image").change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#image_preview_container').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });

        $(".btn_submit").click(function() {
            if ($('#selectorID').val() == "choose") {
                alert("Bạn chưa chọn danh mục sản phẩm");
                return false;
            }
        })
    });
</script>
@endsection