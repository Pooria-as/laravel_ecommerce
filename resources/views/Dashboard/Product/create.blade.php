@extends("Dashboard.layout.master")
@section("Location","Product")
@section("page","Create Product")
@section("Page_Title","New Product")
@section("content")
<div class="card">
    <div class="card-header">
        New Product
    </div>
    <div class="card-body">
        <form action="{{ route("Product.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name">
                        @error("product_name")
                                <span class="badge badge-dabger">
                                    {{ $message }}
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">

                    <label for="product_code">Product Code</label>
                    <input type="text" class="form-control" name="product_code" id="product_code">
                    @error("product_code")
                            <span class="badge badge-dabger">
                                {{ $message }}
                            </span>
                    @enderror

                </div>
                <div class="col-md-4">
                    <label for="product_quantity">Product Quantity</label>
                    <input type="text" class="form-control" name="product_quantity" id="product_quantity">
                    @error("product_quantity")
                            <span class="badge badge-dabger">
                                {{ $message }}
                            </span>
                    @enderror

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">

                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                        <option>Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->Category_name }}
                            </option>
                            @endforeach
                        </select>
                        @error("category_id")
                            <br>
                            <span class="badge badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="subcategory_id">SubCategory</label>
                    <select name="subcategory_id" id="subcategory_id" class="form-control">

                    </select>
                    @error("subcategory_id")
                    <br>
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-md-4">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option>Select Brand</option>
                        @foreach ($brnads as $brand)
                        <option value="{{ $brand->id }}">
                            {{  $brand->Brand_name }}
                        </option>

                        @endforeach
                    </select>
                    @error("brand_id")
                    <br>
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_size">product Size</label>
                        <input id="product_size" type="text"  id="product_size" name="product_size[]" data-role="tagsinput" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="product_color">product Color</label>
                    <input id="product_color" type="text"  id="product_color" name="product_color[]" data-role="tagsinput" class="form-control" />
                    @error("product_color")
                </br>
                <span class="badge badge-danger">
                    {{ $message }}
                </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="selling_price">Selling Price</label>
                    <input id="input" type="text"  id="selling_price" name="selling_price" class="form-control" />
                    @error("selling_price")
                        <br>
                        <span class="badge badge-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                        <label for="proeduct_details">Product Details</label>
                        <input id="proeduct_details" type="hidden" name="proeduct_details">
                        <trix-editor input="proeduct_details"></trix-editor>
                        @error("proeduct_details")
                            <br>
                            <span class="badge badge-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="video_link">Video Link</label>
                        <input type="text" class="form-control" name="video_link">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <label for="image_one">image one</label>
                    <input type="file" name="image_one" onchange="readURL(this)" class="form-control">
                    <br>
                    <img src="" id="image_one" alt=""  class="img-thumbnail">

                </div>
                <div class="col-md-4">
                    <label for="image_one">image Two</label>
                    <input type="file" name="image_two" onchange="readURL2(this)" class="form-control">
                    <br>
                    <img src="" id="image_two" alt=""  class="img-thumbnail">

                </div>
                <div class="col-md-4">
                    <label for="image_one">image Three</label>
                    <input type="file" name="image_three" onchange="readURL3(this)" class="form-control">
                    <br>
                    <img src="" id="image_three" alt=""  class="img-thumbnail">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="main_slider">Main Silder</label>
                    <input type="checkbox" name="main_slider" id="main_slider" value="1" >
                    <br>
                    <label for="hot_deal">Hot Deal</label>
                        <input type="checkbox" name="hot_deal" id="hot_deal" value="1" >

                </div>
                <div class="col-md-4">
                    <label for="mid_slider">Mid Slider</label>
                    <input type="checkbox" name="mid_slider" id="mid_slider" value="1" >
                    <br>
                    <label for="best_rated"> Best Rated</label>
                    <input type="checkbox" name="best_rated" id="best_rated" value="1" >
                </div>
                <div class="col-md-4">
                    <label for="hot_new">Hot New</label>
                    <input type="checkbox" name="hot_new" id="hot_new" value="1" >
                    <br>
                    <label for="trend">Trend</label>
                    <input type="checkbox" name="trend" id="trend" value="1" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-block">Create Product</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
//this for choose category and load subcategory with ajax
$(document).ready(function(){
     $('select[name="category_id"]').on('change',function(){
          var category_id = $(this).val();
          if (category_id) {
            $.ajax({
              url: "{{ url('/admin/get/subcategory/') }}/"+category_id,
              type:"GET",
              dataType:"json",
              success:function(data) {
              var d =$('select[name="subcategory_id"]').empty();
              $.each(data, function(key, value){

              $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.SubCategory_name + '</option>');

              });
              },
            });
          }else{
            alert('danger');
          }
            });
      });
</script>
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
        function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#image_two')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        function readURL3(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#image_three')
                                .attr('src', e.target.result)
                                .width(150)
                                .height(200);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }
    </script>


<script>
    //this for multuple input for size and color
    $(document).ready(function(){
  $('#input').tagsinput('items');
});
</script>

@endsection
