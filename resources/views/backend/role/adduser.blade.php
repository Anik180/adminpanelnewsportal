@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Role</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">User Role</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Role</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">User Role</h4>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('store.user')}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                      
                    <input type="text"  class="form-control" name="name" placeholder="Enter Name" required="">
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                  
                    <input type="text" class="form-control" name="email" placeholder="Enter Email" required="">
                  </div>
                    <div class="form-group">
                    <label >Password</label>
                  
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
                  </div>
                  <div class="row">
                 <div class="form-group col-md-3">
                    <input type="checkbox" name="category" value="1">
                    <label >Category</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="district" value="1">
                    <label >District</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="post" value="1">
                    <label >Post</label>
                  </div>
                       <div class="form-group col-md-3">
                    <input type="checkbox" name="role" value="1">
                    <label >Role</label>
                  </div>
               
                  </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                    <input type="checkbox" name="more_setting" value="1">
                    <label >More Setting</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="gallery" value="1">
                    <label >Gallery</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="ads" value="1">
                    <label >Ads</label>
                  </div>
                   <div class="form-group col-md-2">
                    <input type="checkbox" name="type" checked="" value="0">
                    <label >User</label>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
           
          </div>
            </div>
            <!-- /.card-body -->
          </div>



   
    @endsection