@extends('admin.layouts.app')
@section('content')
<div class="app-wrapper" style="margin-left: 0px;">
    <div class="app-content pt-3 p-md-3 p-lg-4" style="padding-left: 0px !important;">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex">
                        <h1 class="app-page-title mb-0">Thêm topping</h1>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{route('topping.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection