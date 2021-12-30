@extends('admin.layouts.app')
@section('content')
<div class="app-wrapper" style="margin-left: 0px;">
    <div class="app-content pt-3 p-md-3 p-lg-4" style="padding-left: 0px !important;">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex">
                        <h1 class="app-page-title mb-0">List Category</h1>
                        @include('admin.Category.add')
                    </div>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center" method="POST">
                                    @csrf
                                    <div class="col-auto">
                                        <input type="text" id="search" name="search" class="form-control search-orders" placeholder="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                                            <th class="cell">Slug</th>
                                            <th class="cell">Edit</th>
                                            <th class="cell">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
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
    getAllData();
    function getAllData() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'category/getAllCategory',
            success: function(response) {
                var data = "";
                $.each(response, function(key, value) {
                    data = data + "<tr>";
                    data = data + "<td class='cell'>#" + value.id + "</td>";
                    data = data + "<td class='cell'><span class='truncate'>" + value.name + "</span></td>";
                    data = data + "<td class='cell'>" + value.slug + "</td>";
                    data = data + "<td class='cell'>";
                    data = data + "<button class='edit btn' onclick='updateCategory("+value.id+")'><i class='fas fa-edit'></i></button>";
                    data = data + "</td>";
                    data = data + "<td class='cell'>";
                    data = data + "<button class='btn btn_delete' onclick='deleteCategory("+value.id+")'><i class='fas fa-trash-alt'></i></button>";
                    data = data + "</td>";
                    data = data + "</tr>";
                });
                $('tbody').html(data);
            },
            error: function(err) {
                console.log(err);
            }
        });
    }

    function addData() {
        var add_name = $(".add_name").val();
        $.ajax({
            type: 'POST',
            url: "category",
            data: {
                add_name: add_name,
            },
            success: function(data) {
                alert("Thêm thành công!");
                $("#myModal").hide();
                getAllData();
            },
            error: function (err){
                $("#add_error").text(err.responseJSON.errors.add_name);
            }
        });
    }

    function updateData(id){
        alert(id);
    }

    function deleteCategory(id) {
        if (!confirm("Do you really want to delete this?")) {
            return false;
        }

        $.ajax({
            url: "category/" + id,
            method: 'DELETE',
            data: {
                id: id,
            },
            success: function() {
                alert("Xóa thành công!");
                getAllData();
            }
        });
    }

    // {{--$('#search').on('keyup',debounce(function (){--}}
    // {{--    $value=$(this).val();--}}
    // {{--    var _token = $('meta[name="csrf-token"]').attr('content');--}}
    // {{--    $.ajax({--}}
    // {{--        method:"POST",--}}
    // {{--        url : "{{ route('category.search') }}",--}}
    // {{--        data:{'search':$value, _token: _token},--}}
    // {{--        success:function(data){--}}
    // {{--            $('tbody').html(data);--}}
    // {{--        }--}}
    // {{--    });--}}
    // {{--},300));--}}

    // function debounce(func, wait, immediate) {
    //     var timeout;
    //     return function() {
    //         var context = this, args = arguments;
    //         var later = function() {
    //             timeout = null;
    //             if (!immediate) func.apply(context, args);
    //         };
    //         var callNow = immediate && !timeout;
    //         clearTimeout(timeout);
    //         timeout = setTimeout(later, wait);
    //         if (callNow) func.apply(context, args);
    //     };
    // };
</script>
@endsection
