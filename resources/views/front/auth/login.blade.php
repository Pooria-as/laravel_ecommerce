
 @extends("front.layout.master")
 @section("content")
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text text-center">
                Sing In
            </h2>
            <form method="POST" action="{{ route("login") }}">
                @csrf
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  @error("email")
                  <br>
                  <span class="badge badge-danger">{{ $message }}</span>

                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  @error("password")
                      <br/>
                      <span class="badge badge-danger">{{ $message }}</span>
                  @enderror
                </div>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Log in</button>
              </div>
            </form>
              <div class="form-group">
                  <button type="submit" class="btn btn-block btn-danger"> <i class="fab fa-google"></i> Sing In with Google</button>
                  <button type="submit" class="btn btn-block btn-primary"><i class="fab fa-facebook"></i> Sing In with FaceBook </button>
              </div>

        </div>

    </div>
</div>



 @endsection
