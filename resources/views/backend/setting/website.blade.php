@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Important Website</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Important Website</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- datatable -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Important Website</h3>
               <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default" style="margin-right: 5px;">
                    <i class="fas fa-plus-circle"></i>Add New
                  </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Website Name</th>
                  <th>Website Name English</th>
                  <th>Website URL</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($website as $row)
                <tr>
                  <td>{{$row->website_name}}</td>
                  <td>{{$row->website_name_en}}</td>
                  <td>{{$row->website_link}}</td>
                  <td><a href="{{URL::to('edit/website/'.$row->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  <a href="{{route('delete.website',$row->id)}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a> 
                  </td>
                </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Website Name</th>
                  <th>Website Name English</th>
                  <th>Website URL</th>
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
              <h4 class="modal-title">Add New Important Website</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{ route('store.website') }}">
                  	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Website Name</label>
                      @error('website_name')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="website_name" class="form-control @error('website_name') is-invalid @enderror"  value="{{ old('website_name') }}" required id="website_name" placeholder="Enter Website Name">
                  </div>
                      <div class="form-group">
                    <label >Website Name English</label>
                      @error('website_name_en')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="website_name_en" class="form-control @error('website_name_en') is-invalid @enderror"  value="{{ old('website_name_en') }}" required id="website_name_en" placeholder="Enter Website Name English">
                  </div>
                  <div class="form-group">
                    <label >Website URL</label>
                      @error('website_link')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="website_link" class="form-control  @error('website_link') is-invalid @enderror"  value="{{ old('website_link') }}" required id="website_link" placeholder="Enter Website URL">
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