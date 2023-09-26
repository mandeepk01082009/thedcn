@extends('admin.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->


    <div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-5">
            <div class="card p-3">
                <div class="header">
                    <h2>Add Images in Slider</h2>
                </div>
                <div class="body">
                    <form action="/updateabout/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')               


                        <input type="hidden" name="id" id="id" value="{{ $about->id }}"> 

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="heading" class="col-md-4 col-form-label">Heading</label>
                                <input type="text" class="form-control" name="heading" value="{{ $about->heading }}">
                            </div>

                            @if ($errors->has('heading'))  
                                <span class="text-danger">{{ $errors->first('heading') }}</span>
                            @endif

                        </div>   

                        <div class="form-group form-float">  
                            <div class="form-line">
                                <label for="content" class="col-md-4 col-form-label">Content</label>
                                <textarea id="content" type="text" class="form-control" rows="4" name="content" autocomplete="content"
                                    autofocus>{{ $about->content }} </textarea>    
                            </div>

                            @if ($errors->has('content'))        
                                <span class="text-danger">{{ $errors->first('content') }}</span>
                            @endif

                        </div>
                        

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                                <input type="file" value="{{ $about->image }}" class="form-control" name="image">
                            </div>

                                <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid"
                                    style="max-width:70; height:70px;">
                           
                            {{-- @if ($errors->has('image'))     
                                <span class="text-danger">{{ $errors->first('image') }}</span>      
                            @endif           --}}

                        </div>

                        <button type="submit" class="btn btn-primary mt-2"> Edit About Data </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')            
@endsection
