@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Seo Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">Seo Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Seo Setting</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Seo Setting</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('update.seo',$seo->id)}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Meta Author</label>
                      
                    <input type="text"  class="form-control" value="{{$seo->meta_author}}" name="meta_author"  required="">
                  </div>
                  <div class="form-group">
                    <label >Meta Title</label>
                  
                    <input type="text" class="form-control" value="{{$seo->meta_title}}" name="meta_title"  required="">
                  </div>
                   <div class="form-group">
                    <label >Meta Keyword</label>
                  
                    <input type="text" class="form-control" value="{{$seo->meta_keyword}}" name="meta_keyword"  required="">
                  </div>
                   <div class="form-group">
                    <label >Meta Description</label>
                  
                    <input type="text"  class="form-control" value="{{$seo->meta_description}}" name="meta_description"  required="">
                  </div>
                   <div class="form-group">
                    <label >Google Analytics</label>
                  
                    <input type="text"  class="form-control" value="{{$seo->google_analytics}}" name="google_analytics"  required="">
                  </div>
                    <div class="form-group">
                    <label >Google Verification</label>
                  
                    <input type="text" class="form-control" value="{{$seo->google_verification}}" name="google_verification"  required="">
                  </div>
                    <div class="form-group">
                    <label >Alexa Analytics</label>
                  
                    <input type="text"  class="form-control"  name="alexa_analytics" value="{{$seo->alexa_analytics}}" required="">
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