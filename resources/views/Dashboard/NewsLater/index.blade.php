@extends("Dashboard.layout.master")
@section("Location","Category")
@section("page","NewsLater")
@section("Page_Title","All request")
@section("content")


    <div class="card-header">

       <h3>
           All Newslater Request
       </h3>
    </div>
    <div class="card-body">
        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">#</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Subcrible Time</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
            @php
                $row=1;
            @endphp
              @foreach ($newsLaters as $newsLater)

                  <tr>
                    <td>
                      {{ $row++; }}
                    </td>
                    <td>
                        {{ $newsLater->email}}
                    </td>
                    <td>
                        {{ $newsLater->created_at }}
                    </td>
                    <td>
                        <form action="{{ route('NewLater.destroy',$newsLater->id) }}" method="POST">
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





@endsection
