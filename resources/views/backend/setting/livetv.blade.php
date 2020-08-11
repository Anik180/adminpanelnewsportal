@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Live Tv</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">Live Tv</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Live Tv</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Live Tv</h4>
              @if($livetv->status == 1)
              <a href="{{route('deactive.livetv',$livetv->id)}}" class="btn btn-danger" style="float: right;">Deactive</a>
              @else
               <a href="{{route('active.livetv',$livetv->id)}}" class="btn btn-success" style="float: right;">Active</a>
               @endif
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('update.livetv',$livetv->id)}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Embed Code</label>
                  
                    <textarea class="form-control"  name="embed_code"  required="">
                    	{{$livetv->embed_code}}
                    </textarea>
                  </div>
                   
                </div>
                @if($livetv->status == 1)
                <small class="text-success">Live Tv Now Active</small>
                @else
               <small class="text-danger">Live Tv Now Deactive</small>
               @endif
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