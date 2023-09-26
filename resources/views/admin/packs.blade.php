@extends('admin.layouts.app')                

@section('styles')  
@endsection

@section('content')    
    <!-- Begin Page Content -->


    <div class="row clearfix mt-5">
        <div class="col-lg-9">
            <div class="card p-3 mt-5">        
                <div class="header">             
                    <h2>Our Packs</h2>            
                </div>
                <div class="body">    
                    <form action="{{ route('packstore') }}" method="POST" enctype="multipart/form-data">
                        @csrf    
                        
                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="name" class="col-md-4 col-form-label">Name of Pack</label>
                            <input type="text" class="form-control" name="name">    
                            </div>        
  
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif        

                        </div>

                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="image" class="col-md-4 col-form-label">Post Image</label>
                            <input type="file" class="form-control" name="image">    
                            </div>        
  
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif        

                        </div>
                            
                        <button type="submit" class="btn btn-primary mt-2"> Add Image </button>        

                    </form>           
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->      
@endsection

@section('scripts')
@endsection
