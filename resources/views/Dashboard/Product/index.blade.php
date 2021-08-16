@extends("Dashboard.layout.master")
@section("Location","Product")
@section("page","All Product")
@section("Page_Title","Products")
@section("content")
<style>
    .dis{
        display:flex;

    }
</style>
<div class="card">
    <div class="card-header">
        <a href="{{ route("Product.create") }}" class="btn btn-success float-right">
            New Product
        </a>
       <h3>
           All Product
       </h3>
    </div>
    <div class="card-body">
        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Product Code</th>
                  <th class="wd-15p">Product Name</th>
                  <th class="wd-20p">Product Image</th>
                  <th class="wd-20p">Category</th>
                  <th class="wd-20p">Brand</th>
                  <th class="wd-20p">Quantity</th>
                  <th>Status</th>
                  <th>
                      Action
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach ($products as $product)
                  <tr>
                    <td>
                        {{ $product->product_code}}
                    </td>
                    <td>
                        {{ $product->product_name}}
                    </td>
                    <td>
                        <img src="/{{ $product->image_one }}" width="100" class="img-thumbnail"  alt="">
                    </td>
                    <td>
                        {{ $product->category->Category_name}}
                    </td>

                    <td>
                        {{ $product->brand->Brand_name}}
                    </td>
                    <td>
                        {{ $product->product_quantity }}
                    </td>
                    <td>
                        {!! $product->ActiveOrInActiveStatus($product) !!}
                    </td>

                    <td class="dis">
                        <a href="{{ route("Product.edit",$product->id) }}" class="btn btn-sm  btn-primary">
                              <i class="fa fa-edit"></i>
                            </a>
                        <form action="{{ route("Product.destroy",$product->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            {{-- <button class="btn btn-sm m-1 btn-danger delete" type="submit">Delete</button> --}}
                            <button class="btn btn-sm  btn-danger" type="submit" onclick="return confirm('Do you want to delete this?');">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <a href="{{ route("Product.show",$product->id) }}" class="btn btn-sm  btn-warning">
                            <i class="fa fa-eye"></i>
                        </a>
                         @if ($product->status!=1)
                        <a href="{{ route("activeStatus",$product->id) }}" class="btn btn-sm  btn-success"><i class="fa fa-thumbs-up"></i></a>
                        @else
                        <a href="{{ route("DeActiveStatus",$product->id) }}" class="btn btn-sm  btn-danger"><i class="fa fa-thumbs-down"></i></a>
                        @endif
                    {{-- {{ $product->ActiveProduct($product) }} --}}

                    </td>
                </tr>

              @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>
@endsection
