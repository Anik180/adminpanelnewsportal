@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Important Website</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('website')}}">Important Website</a></li>
                 <li class="breadcrumb-item active">Edit Important Website</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Important Website Modify</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Update Important Website  </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('update.website',$website->id)}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Website Name</label>
                      
                    <input type="text"  class="form-control" value="{{$website->website_name}}" name="website_name" required="">
                  </div>
                     <div class="form-group">
                    <label >Website Name English</label>
                      
                    <input type="text"  class="form-control" value="{{$website->website_name_en}}" name="website_name_en" required="">
                  </div>
                  <div class="form-group">
                    <label >Website URL</label>
                  
                    <input type="text" class="form-control" value="{{$website->website_link}}" name="website_link"  required="">
                  </div>
                  <div class="form-group mb-0">
               
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
           
          </div>
            </div>
            <!-- /.card-body -->
          </div>



   
    @endsection