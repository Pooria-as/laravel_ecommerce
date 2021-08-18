@extends("layouts.app")
@section("content")

<div class="container">
    <div class="row">
     <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Change Password
                <a href="{{ route("home") }}" class="btn btn-info float-right">Back To Dashboard</a>
            </div>
            <div class="card-body">
              <form action="{{ route("UpdatePasswordUser") }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="oldpass">Old Password</label>
                      <input type="password" class="form-control" name="oldpass" id="oldpass">
                      @error("oldpass")
                          <br>
                          <span class="badge badge-danger">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    @error("password")
                        <br>
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    @error("password_confirmation")
                        <br>
                        <span class="badge badge-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Change Password</button>
                </div>
              </form>
          </div>
        </div>
     </div>

    </div>

</div>















@endsection
