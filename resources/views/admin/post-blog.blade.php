
@extends('admin.admin-layouts')
@section('content')
 <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Blog Posts</h4>
              </div>
              <div class="card-body">
               <form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="Title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Created by</label>
    <input type="creator" class="form-control" id="exampleFormControlInput1" placeholder="creator">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button class="btn btn-success">Post</button>
</form>

              </div>
            </div>
          </div>
                  </div>
      </div>


@endsection