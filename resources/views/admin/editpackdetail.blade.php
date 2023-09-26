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
                    <form action="/updatedetail/{{ $packs->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')               


                        <input type="hidden" name="id" id="id" value="{{ $packs->id }}"> 
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="name" class="col-md-4 col-form-label">Name of Pack</label>
                        <select class="custom-select form-control" name="pack_id">
                            @foreach ($pack as $packes)
                            <option value="{{$packes->id}}" @if($packes->id == $packs->pack_id) selected @endif>{{$packes->name}}</option>
                            @endforeach
                        </select>
                            </div> 

                            @if ($errors->has('pack_id'))
                            <span class="text-danger">{{ $errors->first('pack_id') }}</span>
                        @endif

                    </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="image" class="col-md-4 col-form-label">Description</label>
                                <input type="text" value="{{ $packs->name }}" class="form-control" name="name">
                            </div>

                           
                            @if ($errors->has('name'))     
                                <span class="text-danger">{{ $errors->first('name') }}</span>      
                            @endif          

                        </div>    


                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                                <input type="file" value="{{ $packs->image }}" class="form-control" name="image">
                            </div>

                                <img src="{{ asset('storage/' . $packs->image) }}" class="img-fluid"
                                    style="max-width:70; height:70px;">
                           
                            {{-- @if ($errors->has('image'))     
                                <span class="text-danger">{{ $errors->first('image') }}</span>      
                            @endif           --}}

                        </div>

                        <button type="submit" class="btn btn-primary mt-2"> Edit Pack Detail</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')            
@endsection
