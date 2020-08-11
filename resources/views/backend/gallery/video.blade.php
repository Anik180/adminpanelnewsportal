@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Video Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Video Gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- datatable -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Video</h3>
               <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default" style="margin-right: 5px;">
                    <i class="fas fa-plus-circle"></i>Add New
                  </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($video as $row)
                <tr>
                  <td>{{$row->title}}</td>
                  <td>
                  @if($row->type==1)
                  <span class="badge badge-success">Big photo</span>
                  	@else
                  	<span class="badge badge-warning">Small photo</span>
                  	@endif
                  </td>
                  <td><a href="{{route('edit.photo',$row->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  <a href="{{route('delete.video',$row->id)}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a> 
                  </td>
                </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                   <th>Title</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>



          <!-- modal -->
              <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{ route('store.video') }}">
                  	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{ old('title') }}" required id="title">
                  </div>
                  <div class="form-group">
                    <label>Video Embed Code</label>
                      @error('embed_code')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="embed_code" class="form-control  @error('embed_code') is-invalid @enderror"  value="{{ old('embed_code') }}" required id="embed_code" placeholder="Enter Video Embed Code">
                  </div>
                         <div class="form-group">
                    <label >Type</label>
                   <select class="form-control" name="type" required>
                   	<option selected="" disabled="">Select One</option>
                   	<option value="1">Big Photo</option>
                   	<option value="0">Small Photo</option>
                   </select>
                  </div>
                  <div class="form-group mb-0">
               
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    @endsection