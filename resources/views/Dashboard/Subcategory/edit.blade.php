@extends("Dashboard.layout.master")
@section("Location","Category")
@section("page","Edit Subcategory")
@section("Page_Title","Subcategory")
@section("content")

<div class="card">
    <div class="card-header">
        Edit Subcategory
    </div>
    <div class="card-body">
        <form action="{{ route("SubCategory.update",$SubCategory->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="SubCategory_name">SubCategory Name</label>
                <input type="text" name="SubCategory_name" class="form-control" id="SubCategory_name" value="{{ $SubCategory->SubCategory_name }}">
                @error("SubCategory_name")
                    <span class="badge badge-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cat">Category</label>
                <select name="category_id" id="category" class="form-control" id="cat">

                    @foreach ($categories as $category)
                         <option value="{{$category->id}}"
                             @if(isset($SubCategory))
                             @if($category->id == $SubCategory->category_id)
                             selected
                             @endif
                             @endif
                             >
                             {{$category->Category_name}}
                         </option>
                    @endforeach

                 </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Edit Subcategory</button>
            </div>
        </form>
    </div>
</div>

@endsection
