@extends("Dashboard.layout.master")
@section("Location","Blog Post")
@section("page","All Posts")
@section("Page_Title","Posts")
@section("content")
<style>
    .dis{
        display:flex;

    }
</style>
<div class="card">
    <div class="card-header">
        <a href="{{ route("Post.create") }}" class="btn btn-success float-right">
            New Posts
        </a>
       <h3>
           All Posts
       </h3>
    </div>
    <div class="card-body">
        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">#</th>
                  <th class="wd-15p">Post Title EN</th>
                  <th class="wd-15p">Post Title FA</th>
                  <th class="wd-15p">Post Image</th>
                  <th class="wd-20p">Category</th>
                  <th>
                      Action
                  </th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $row=1;
                  @endphp
              @foreach ($posts as $post)
                  <tr>
                      <td>
                          {{ $row++; }}
                      </td>
                    <td>
                        {{ $post->post_title_EN}}
                    </td>
                    <td>
                        {{ $post->post_title_EN}}
                    </td>
                    <td>
                        <img src="/{{ $post->post_image }}" width="100" class="img-thumbnail"  alt="">
                    </td>
                    <td>
                        {{ $post->category_name_EN}} || {{ $post->category_name_FA}}
                    </td>
                    <td class="dis">
                        <a href="{{ route("Post.edit",$post->id) }}" class="btn btn-sm  btn-primary">
                              <i class="fa fa-edit"></i>
                            </a>
                        <form action="{{ route("Post.destroy",$post->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            {{-- <button class="btn btn-sm m-1 btn-danger delete" type="submit">Delete</button> --}}
                            <button class="btn btn-sm  btn-danger" type="submit" onclick="return confirm('Do you want to delete this?');">
                                <i class="fa fa-trash"></i>
                            </button>
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
