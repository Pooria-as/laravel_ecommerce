@extends("front.layout.master")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text text-center">
                Sing Up
            </h2>
            <form method="POST" action="{{ route("register") }}">
                @csrf
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name"  name="name" placeholder="Enter name">
                    @error("name")
                    <br>
                    <span class="badger badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="Phone">Phone</label>
                  <input type="text" class="form-control" name="phone" id="Phone" placeholder="Phone">
                  @error("phone")
                  <br>
                  <span class="badger badge-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="Email">
                    @error("email")
                    <br>
                    <span class="badger badge-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                    @error("password")
                        <br>
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="ConfirmPassword">Confirm Password</label>
                    <input type="password"  name="password_confirmation" required class="form-control" id="ConfirmPassword" placeholder="ConfirmPassword">
                    @error("ConfirmPassword")
                    <br>
                    <span class="badge badge-danger">{{ $message }}</span>
                     @enderror
                  </div>
                <button type="submit" class="btn btn-success btn-block">Sing Up</button>
              </form>
        </div>
    </div>
</div>
@endsection
