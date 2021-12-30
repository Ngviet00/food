@extends('admin.layouts.app')
@section('content')
<div class="app-wrapper" style="margin-left: 0px;">
    <div class="app-content pt-3 p-md-3 p-lg-4" style="padding-left: 0px !important;">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex">
                        <h1 class="app-page-title mb-0">Thêm slide</h1>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{route('slide.store')}}" enctype="multipart/form-data">
                @csrf
                <div>
                    <img id="image_preview_container" src="" style="max-height: 150px;">
                </div>
                <div class="form-group">
                    <label for="image">Choose Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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
    });
</script>
@endsection