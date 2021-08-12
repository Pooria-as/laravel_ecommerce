@extends("Dashboard.layout.master")
@section("Location","Category")
@section("page","SubCategory")
@section("Page_Title","All Subcategory")
@section("content")
<div class="card">
    <div class="card-header">
        <a  class="btn btn-success float-right m-2" style="color: white !important;" data-toggle="modal" data-target="#exampleModal">
         New Subcategory
        </a>
       <h3>
           All Subcategory
       </h3>
    </div>
    <div class="card-body">

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">#</th>
                  <th class="wd-15p">Subcategory Name</th>
                  <th class="wd-15p">Category Name</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
            @php
                $row=1;
            @endphp
              @foreach ($Subcategories as $Subcategory)
                  <tr>
                    <td>
                      {{ $row++; }}
                    </td>
                    <td>
                        {{ $Subcategory->SubCategory_name}}
                    </td>
                    <td>
                        {{-- {{ $Subcategory->category->Category_name }} --}}
                        {{ $Subcategory->category->Category_name }}
                    </td>
                    <td>
                        <a href="{{ route("SubCategory.edit",$Subcategory->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route("SubCategory.destroy",$Subcategory->id) }}" method="POST">
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
        <h5 class="modal-title" id="exampleModalLabel">New Subcategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ route('SubCategory.store') }}">
            @csrf
            <div class="form-group">
                <label for="sbName">Subcategory name</label>
                <input type="text" class="form-control" name="SubCategory_name" id="sbName">
                @error("SubCategory_name")
                    <span class="badge badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cat">Category name</label>
             <select name="category_id" id="cat" class="form-control">
                 @foreach ($Categories as $Category)
                    <option value="{{ $Category->id }}">
                        {{ $Category->Category_name }}
                    </option>
                 @endforeach
             </select>
             @error("category_id")
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
