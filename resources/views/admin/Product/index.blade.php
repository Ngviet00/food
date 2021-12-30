@extends('admin.layouts.app')
@section('content')
<div class="app-wrapper" style="margin-left: 0px;">
    <div class="app-content" style="padding-left: 0px !important;">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex">
                        <h1 class="app-page-title mb-0">List Product</h1>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{route('product.create')}}" class="btn btn-primary text-white">Thêm mới</a>
                </div>
            </div>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
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
                                            <th class="cell">Image</th>
                                            <th class="cell">Price</th>
                                            <th class="cell">Danh mục</th>
                                            <th class="cell">Edit</th>
                                            <th class="cell">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($list_products as $value)
                                        <tr>
                                            <td class="cell">{{ $value->id }}</td>
                                            <td class="cell">{{ $value->name }}</td>
                                            <td class="cell">
                                                <img width="150" height="100" src="{{ $value->image }}" alt="">
                                            </td>
                                            <td class="cell">{{ number_format($value->price) }}</td>
                                            <td class="cell">{{ $value->category->name }}</td>
                                            <td class="cell">
                                                <button class='edit btn'><i class='fas fa-edit'></i></button>
                                            </td>
                                            <td class="cell">
                                                <form method="post" action="{{route('product.destroy',$value)}}">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="edit btn" onclick="return confirm('Bạn có muốn xóa không?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <p class="p-2">No slide</p>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="custom_pagination">
                                    {{ $list_products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $(":checkbox").click(function(event){
        var status = $(this).prop('checked') == true ? 1:0;
        var id = event.target.id;
        $.ajax({
            method: "PUT",
            dataType: 'json',
            data:{
                id: id,
                status: status,
            },
            url:  "slide/" + event.target.id,
            success: function( data){
                alert("Changed Successfully");
            },
            error: function(err){
                console.log(err);
            }
        });               
    });
</script>
@endsection