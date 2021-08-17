@extends("Dashboard.layout.master")
@section("page","blog")
@section("Location","blog post")
@section("Page_Title","Edit post ")
@section("content")
<div class="card">
    <div class="card-header">
        Edit Post
    </div>
    <div class="card-body">
        <form action="{{ route("Post.update",$Post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="post_title_EN">post_title_EN</label>
                        <input type="text" class="form-control" name="post_title_EN" value="post_title_EN">
                        @error("post_title_EN")
                            <span class="badge badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="post_title_EN">post_title_FA</label>
                        <input type="text" class="form-control" name="post_title_FA" value="post_title_FA">
                        @error("post_title_FA")
                            <span class="badge badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="category">Blog Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option>Select Blog Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if($Post)
                                    @if($category->id == $Post->category_id)
                                    selected
                                    @endif
                                    @endif
                                    >
                                    {{ $category->category_name_EN }} ||  {{ $category->category_name_FA }}
                                </option>
                            @endforeach
                        </select>
                        @error("post_title_EN")
                            <span class="badge badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
                <label for="details_EN"> English Detail</label>
                <input id="details_EN" type="hidden" value="{{ $Post->details_EN }}" name="details_EN">
                <trix-editor input="details_EN"></trix-editor>
                @error("details_EN")
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
                <label for="details_FA"> Persian Detail</label>
                <input id="details_FA" type="hidden" name="details_FA" value="   {{ $Post->details_FA }}">
                <trix-editor input="details_FA">

                </trix-editor>
                @error("details_FA")
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
                <label for="post_image">Post Image</label>
                <input type="file" name="post_image" onchange="readURL(this)" class="form-control">
                <br>
                <input type="hidden" name="old_image" value="{{ $Post->post_image }}">
                <img src="/{{ $Post->post_image }}" width="100" id="image_one" alt=""  class="img-thumbnail">
                @error("post_image")
                    <br>
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit">Edit Post</button>
            </div>
        </form>
    </div>
</div>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image_one')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection
