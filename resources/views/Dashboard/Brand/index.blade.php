@extends("Dashboard.layout.master")
@section("Location","Category")
@section("page","Brands")
@section("Page_Title","Brnads")
@section("content")


<style>
    .dis{
        display: flex;
    }
</style>

<div class="card">

    <div class="card-header">
        <a  class="btn btn-success float-right m-2" style="color: white !important;" data-toggle="modal" data-target="#exampleModal">
         New brnad
        </a>
       <h3>
           All brnad
       </h3>
    </div>
    <div class="card-body">

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">#</th>
                  <th class="wd-15p">Brand Name</th>
                  <th class="wd-15p">Brand logo</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
            @php
                $row=1;
            @endphp
              @foreach ($Brands as $Brand)

                  <tr>
                    <td>
                      {{ $row++; }}
                    </td>
                    <td>
                        {{ $Brand->Brand_name}}
                    </td>
                    <td>
                        <img src="/{{ $Brand->Brand_logo }}" width="50" alt="">
                    </td>
                    <td class="dis">
                        <a href="{{ route("Brand.edit",$Brand->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route("Brand.destroy",$Brand->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class=" btn btn-sm  btn-danger" type="submit" onclick="return confirm('Do you want to delete this?');">Delete</button>
                        </form>
                    </td>
                </tr>

              @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>


<!-- Modal new Brand -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ route('Brand.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="Brand_name" placeholder="Brand Name">
                @error("Brand_name")
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="Brand_logo" onchange="readURL(this);">
                @error("Brand_logo")

                <span class="badge badge-danger">{{ $message }}</span>
                @enderror
                <br>
                <img id="blah" src=""  alt="" />

                <button class="btn btn-success btn-block" type="submit">Save</button>
                <button class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
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
