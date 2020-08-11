@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Prayer Time</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">Prayer Time</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Prayer Time</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Prayer Time</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('update.prayer',$prayer->id)}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Fajr</label>
                      
                    <input type="text"  class="form-control" value="{{$prayer->fajor}}" name="fajor"  required="">
                  </div>
                  <div class="form-group">
                    <label >Johr</label>
                  
                    <input type="text" class="form-control" value="{{$prayer->johor}}" name="johor"  required="">
                  </div>
                   <div class="form-group">
                    <label >Asor</label>
                  
                    <input type="text" class="form-control" value="{{$prayer->asor}}" name="asor"  required="">
                  </div>
                   <div class="form-group">
                    <label >Magrib</label>
                  
                    <input type="text"  class="form-control" value="{{$prayer->magrib}}" name="magrib"  required="">
                  </div>
                   <div class="form-group">
                    <label >Esha</label>
                  
                    <input type="text"  class="form-control" value="{{$prayer->esha}}" name="esha"  required="">
                  </div>
                    <div class="form-group">
                    <label >Jummah</label>
                  
                    <input type="text" class="form-control" value="{{$prayer->jummah}}" name="jummah"  required="">
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