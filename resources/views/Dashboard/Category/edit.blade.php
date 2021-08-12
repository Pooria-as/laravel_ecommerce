@extends("Dashboard.layout.master")
@section("content")
@section("Location","Category")
@section("page","Edit")

<div class="card">
    <div class="card-header">
        Edit Category
    </div>
    <div class="card-body">
        <form action="{{ route("Category.update",$Category->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" name="Category_name" class="form-control" id="category_name" value="{{ $Category->Category_name }}">
                @error("Category_name")
                    <span class="badge badge-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Edit Category</button>
            </div>
        </form>
    </div>
</div>





@endsection
