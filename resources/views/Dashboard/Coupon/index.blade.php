@extends("Dashboard.layout.master")
@section("Location","Coupon")
@section("page","All Coupon")
@section("Page_Title","All Coupon")
@section("content")



<div class="card">

    <div class="card-header">
        <a  class="btn btn-success float-right m-2" style="color: white !important;" data-toggle="modal" data-target="#exampleModal">
         New Coupon
        </a>
       <h3>
           All Coupon
       </h3>
    </div>
    <div class="card-body">

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">#</th>
                  <th class="wd-15p">Coupon</th>
                  <th class="wd-15p">Discount</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
            @php
                $row=1;
            @endphp
              @foreach ($coupons as $coupon)

                  <tr>
                    <td>
                      {{ $row++; }}
                    </td>
                    <td>
                        {{ $coupon->coupon}}
                    </td>
                    <td>
                        {{ $coupon->discount }} %
                    </td>
                    <td>
                        <a href="{{ route("Coupon.edit",$coupon->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route("Coupon.destroy",$coupon->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            {{-- <button class="btn btn-sm m-1 btn-danger delete" type="submit">Delete</button> --}}
                            <button class=" btn btn-sm m-1 btn-danger" type="submit" onclick="return confirm('Do you want to delete this?');">Delete</button>
                        </form>
                    </td>
                </tr>

              @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>




<!-- Button trigger modal -->


<!-- Modal new category -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Coupon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ route("Coupon.store") }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="coupon">
                @error("coupon")
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="discount">discount</label>
                <input type="text" class="form-control" id="discount" name="discount">
                @error("discount")
                <span class="badge badge-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-6"><button class="btn btn-success btn-block" type="submit">Save</button></div>
                    <div class="col-md-6"><button class="btn btn-danger btn-block" data-dismiss="modal">Close</button></div>
                </div>
            </div>
        </form>
      </div>

    </div>
  </div>
</div>





































@endsection
