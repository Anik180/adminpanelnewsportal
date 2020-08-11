@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Role</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">Update Role</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Update Role</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Update Role</h4>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('update.user',$edit->id)}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                      
                    <input type="text"  class="form-control" name="name" value="{{$edit->name}}" required="">
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                  
                    <input type="text" class="form-control" name="email" value="{{$edit->email}}" required="">
                  </div>
                  <div class="row">
                 <div class="form-group col-md-3">
                    <input type="checkbox" name="category" value="1" @if($edit->category==1)checked="" @endif>
                    <label >Category</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="district" value="1" @if($edit->post==1)checked="" @endif>
                    <label >District</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="post" value="1" @if($edit->category==1)checked="" @endif>
                    <label >Post</label>
                  </div>
                       <div class="form-group col-md-3">
                    <input type="checkbox" name="role" value="1" @if($edit->role==1)checked="" @endif>
                    <label >Role</label>
                  </div>
               
                  </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                    <input type="checkbox" name="more_setting" value="1" @if($edit->more_setting==1)checked="" @endif>
                    <label >More Setting</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="gallery" value="1" @if($edit->gallery==1)checked="" @endif>
                    <label >Gallery</label>
                  </div>
                   <div class="form-group col-md-3">
                    <input type="checkbox" name="ads" value="1" @if($edit->ads==1)checked="" @endif>
                    <label >Ads</label>
                  </div>
                   <div class="form-group col-md-2">
                    <input type="checkbox" name="type" checked="" value="0" @if($edit->type==1)checked="" @endif>
                    <label >User</label>
                  </div>
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