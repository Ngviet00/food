@extends('admin.layouts.app')
@section('content')
<div class="app-wrapper" style="margin-left: 0px;">
    <div class="app-content pt-3 p-md-3 p-lg-4" style="padding-left: 0px !important;">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex">
                        <h1 class="app-page-title mb-0">List Topping</h1>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{route('topping.create')}}" class="btn btn-secondary">
                        Thêm mới
                    </a>
                </div>
            </div>
            @if(session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('msg')}}
            </div>
            @endif
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">STT</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Slug</th>
                                            <th class="cell">Price</th>
                                            <th class="cell">Edit</th>
                                            <th class="cell">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($list_toppings as $value)
                                        <tr>
                                            <td class="cell">{{$value->id}}</td>
                                            <td class="cell">{{$value->name}}</td>
                                            <td class="cell">{{$value->slug}}</td>
                                            <td class="cell">{{$value->price}}</td>
                                            <td class="cell">
                                                <a href="{{route('topping.edit',[$value])}}" class="edit btn">
                                                    <i class='fas fa-edit'></i>
                                                </a>
                                            </td>
                                            <td class="cell">
                                                <form method="post" action="{{route('topping.destroy',[$value])}}">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="edit btn" onclick="return confirm('Bạn có muốn xóa không?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <p class="p-2">Bạn không có topping nào, <a href="{{route('topping.create')}}">Thêm ngay</a></p>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="custom_pagination">
                                    {{ $list_toppings->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection