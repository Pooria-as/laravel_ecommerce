@extends("Dashboard.layout.master")
@section("Location","Product")
@section("page","All Product")
@section("Page_Title","Products")
@section("content")

<div class="card">
    <div class="card-header">

       <h3>
           Show Product
       </h3>
    </div>
    <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <p>
                            {{ $Product->product_name }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">

                    <label for="product_code">Product Code</label>
                    <p>
                        {{ $Product->product_code}}
                    </p>

                </div>
                <div class="col-md-4">
                    <label for="product_quantity">Product Quantity</label>
                    <p>
                        {{ $Product->product_quantity }}
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <p>
                            {{ $Product->Category_name }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="subcategory_id">SubCategory</label>
                    <p>
                        {{ $Product->SubCategory_name }}
                    </p>
                </div>
                <div class="col-md-4">
                    <label for="brand_id">Brand</label>
                   <p>
                    {{ $Product->Brand_name }}
                   </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_size">product Size</label>
                <p>{{$Product->product_size }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="product_color">product Color</label>
                    <p>
                        {{ $Product->product_color}}
                    </p>

                </br>

                </div>
                <div class="col-md-4">
                    <label for="selling_price">Selling Price</label>
                    <p>
                        {{ $Product->selling_price}}
                    </p>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                        <label for="proeduct_details">Product Details</label>

                            <p>
                                {!! $Product->proeduct_details !!}
                            </p>
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="video_link">Video Link</label>
                      <p>
                        {{ $Product->video_link }}
                      </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <label for="image_one">image one</label>
                    <br>
                    <img src="/{{ $Product->image_one }}" id="image_one" alt=""  class="img-thumbnail">
                    <br>


                </div>
                <div class="col-md-4">
                    <label for="image_one">image Two</label>
                    <br>
                    <img src="/{{ $Product->image_two }}" id="image_two" alt=""  class="img-thumbnail">


                </div>
                <div class="col-md-4">
                    <label for="image_one">image Three</label>
                    <br>
                    <img src="/{{ $Product->image_three}}" id="image_three" alt=""  class="img-thumbnail">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="main_slider">Main Silder</label>
                        @if ($Product->main_slider==1)
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">DeActive</span>
                    @endif

                    <br>
                    <label for="hot_deal">Hot Deal</label>

                    @if ($Product->hot_deal==1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">DeActive</span>
                  @endif
                </div>
                <div class="col-md-4">
                    <label for="mid_slider">Mid Slider</label>

                  @if ($Product->mid_slider==1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">DeActive</span>
                @endif
                    <br>
                    <label for="best_rated"> Best Rated</label>

                  @if ($Product->best_rated==1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">DeActive</span>
                @endif
                </div>
                <div class="col-md-4">
                    <label for="hot_new">Hot New</label>

                @if ($Product->hot_new==1)
                <span class="badge badge-success">Active</span>
                @else
                <span class="badge badge-danger">DeActive</span>
              @endif
                    <br>
                    <label for="trend">Trend</label>

                    @if ($Product->trend==1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">DeActive</span>

                  @endif

                </div>
            </div>


    </div>
    </div>

</div>
@endsection
