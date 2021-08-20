@extends("front.layout.master")


@section('content')
<br>
<div class="container" style="margin-top: 100px;">
<div class="row">
    <div class="col-md-8">
        <div class="container">
          <div class="card">
              <div class="card-header">
                  Details
              </div>
              <div class="card-body">
                <table class="table table-stripted table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>first</th>
                            <th>second</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                pooria
                            </td>
                            <td>
                                asiabi
                            </td>
                        </tr>
                    </tbody>
                 </table>
              </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ Gravatar::src(Auth::user()->email) }}"  alt="" class="rounded">
                    </div>
                    <div class="col-md-6">
                        <p>
                        Name : {{ Auth::user()->name }}
                        </p>
                        <p style="font-size: 11px;">
                            Email :{{ Auth::user()->email }}
                        </p>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route("ChnageUserPassword") }}">Change Password</a></li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    {{-- <li class="list-group-item"><a href="" class="btn btn-block btn-danger btn-block" href="{{ route("LogOut") }}">Log Out</a></li> --}}

                  </ul>
            </div>
        </div>
    </div>
</div>
</div>
<br>
@endsection
