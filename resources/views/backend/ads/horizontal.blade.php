@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Ads</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Ads</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- datatable -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Ads</h3>
               <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default" style="margin-right: 5px;">
                    <i class="fas fa-plus-circle"></i>Add New
                  </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Ads</th>
                  <th>type</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($horizontal as $row)
                <tr>
                  <td>
                    @if($row->type==2)
                    <img src="{{URL::to($row->ads)}}" style="height: 80px; width: 300px;">
                    @else
                    <img src="{{URL::to($row->ads)}}" style="height: 80px; width: 80px;">
                    @endif
                    </td>

                    
                  <td>
                    @if($row->type==2)
                    Horizontal
                    @else
                    vertical
                    @endif
                  </td>
                  <td><a href="{{URL::to('edit/category/'.$row->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  <a href="{{route('delete.category',$row->id)}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a> 
                  </td>
                </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                 <th>Ads</th>
                  <th>type</th>
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
              <h4 class="modal-title">Add New Ads</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{ route('store.ads') }}" enctype="multipart/form-data">
                  	@csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputFile">Ads</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="ads" required="">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label >Link</label>
                      @error('link')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="link" class="form-control  @error('link') is-invalid @enderror"  value="{{ old('link') }}" required id="link" placeholder="Enter Link">
                  </div>
                    <div class="form-group">
                  <label>Type</label>
                    <select class="form-control"name="type">
                    <option selected="" disabled="">Select One</option>
                    <option value="2">Horizontal</option>
                    <option value="1">Vertical</option>
                
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