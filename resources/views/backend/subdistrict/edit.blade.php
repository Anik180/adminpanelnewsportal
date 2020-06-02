@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Sub District</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('subdistrict')}}">Sub District</a></li>
                 <li class="breadcrumb-item active">Edit Sub District</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Sub District Modify</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Update Sub District  </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('update.subdistrict',$subdistrict->id)}}">
                    @csrf
                <div class="card-body">
                     <div class="form-group">
                    <label >District</label>
                     
                  <select class="form-control @error('district_id') is-invalid @enderror" name="district_id" required> 
                      <option disabled=""selected="">Select One</option>
                      @foreach($district as $row)
                      <option value="{{$row->id}}" <?php if($row->id==$subdistrict->district_id)
                      echo "selected";
                      ?>>{{$row->district_en}}|{{$row->district_bn}}</option>
                      @endforeach
                  </select>
                 
                  </div>
                  <div class="form-group">
                    <label >Sub District Name English</label>
                      
                    <input type="text"  class="form-control" value="{{$subdistrict->subdistrict_en}}" name="subdistrict_en" placeholder="Enter Sub District Name English" required="">
                  </div>
                  <div class="form-group">
                    <label >Sub District Name Bangla</label>
                  
                    <input type="text" class="form-control" value="{{$subdistrict->subdistrict_bn}}" name="subdistrict_bn" placeholder="Enter Sub District Name Bangla" required="">
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