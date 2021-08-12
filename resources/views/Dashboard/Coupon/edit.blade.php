@extends("Dashboard.layout.master")
@section("Location","Coupon")
@section("page","Edit Coupon")
@section("Page_Title","Edit Coupon")
@section("content")




<div class="card">
    <div class="card-header">
        Edit Coupon
    </div>
    <div class="card-body">
        <form action="{{ route("Coupon.update",$Coupon->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="category_name">Coupon Code</label>
                <input type="text" name="coupon" class="form-control" id="coupon" value="{{ $Coupon->coupon }}">
                @error("coupon")
                    <span class="badge badge-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="discount">Coupon Discount</label>
                <input type="number" id="discount" name="discount" class="form-control" value="{{ $Coupon->discount  }}">
                @error("discount")
                <span class="badge badge-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Edit Coupon</button>
            </div>
        </form>
    </div>
</div>


















@endsection
