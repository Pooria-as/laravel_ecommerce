@extends("Dashboard.layout.master")
@section("Location","Edit category Blog")
@section("page","Category")
@section("content")






<div class="card">
    <div class="card-header">
        <h4>
            Edit category
        </h4>
    </div>
    <div class="card-body">
        <form action="{{ route("BlogCategory.update",$BlogCategory->id) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="form-group">
            <label for="category_name_EN"> category Name_EN</label>
                <input type="text" class="form-control" name="category_name_EN" value="{{ $BlogCategory->category_name_EN  }}">
                @error("category_name_EN")
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
            <label for="category_name_FA    "> category Name_FA</label>

                <input type="text" class="form-control" name="category_name_FA" value="{{ $BlogCategory->category_name_FA  }}">
                @error("category_name_FA")
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
            </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success">Edit Category</button>
                </div>
        </form>
    </div>
</div>












@endsection
