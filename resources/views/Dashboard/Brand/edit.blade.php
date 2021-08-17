@extends("Dashboard.layout.master")
@section("Location","Category","Edit")
@section("page","Edit Brand")
@section("content")
<div class="card">
    <div class="card-header">
        Edit Brand
    </div>
    <div class="card-body">
        <form action="{{ route("Brand.update",$Brand->id) }}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="category_name">Brand Name</label>
                <input type="text" name="Brand_name" class="form-control" id="Brand_name" value="{{ $Brand->Brand_name }}">
                @error("Brand_name")
                    <span class="badge badge-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <input type="hidden" name="old_image" value="{{$Brand->Brand_logo}}" id="">
            <div class="form-group">
                <input type='file' name="Brand_logo" class="form-control" onchange="readURL(this);" />
                <label for="old_image">old Image</label>
                <img src="/{{ $Brand->Brand_logo }}" width="100"  class="img img-thumnail" id="old_image"  alt="">
            </div>
            <img id="blah" src=""  alt="" />
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Edit Brand</button>
            </div>
        </form>
    </div>
</div>


<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
