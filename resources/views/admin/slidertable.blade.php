@extends('admin.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid mt-5">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                
            </div>   
            <div class="card-body">
                {{-- <a href="{{ URL::to('img_type/create') }}"><i class="fa fa-plus-square" style="font-size: 40px;float:right;"></i></a> --}}
                <a href="{{ route('slider') }}"><button class="btn btn-primary" style="float:right;">Add</button></a><br><br>
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL.</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($image as $key => $images)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>             
                                                <img src="{{ asset('storage/' . $images->image) }}" class="img-fluid"
                                                style="max-width:70; height:70px;">
                                        </td>
                                        {{-- <td><img src="{{ asset('storage/' . $images->image) }}" class="img-fluid"
                                                style="max-width:70; height:70px;"></td> --}}
                                        <td class="text-center">
                                            {{-- <a href="{{ route('img_type.edit', $image_types->id) }}" class="btn btn-info btn-sm waves-effect">
                                            <i class="material-icons">edit</i>                             
                                        </a> --}}  
                                            <a href="/editslider/{{ $images->id }}" class="btn btn-info btn-sm waves-effect">
                                                <i class="material-icons">Edit</i>
                                            </a>
                                            <a href="/deleteslider/{{ $images->id }}"  
                                                class="btn btn-danger btn-sm waves-effect">
                                                <i class="material-icons">Delete</i>
                                            </a>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    @endsection

    @section('scripts')
    @endsection
