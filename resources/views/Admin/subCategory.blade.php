@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-title">
                <h3> Sub Categories </h3>
            </div>
            <div class="card-body d-flex justify-content-between ">

                <div class="card col-lg-12 ">
                    <div class="card-header card-title">
                        <h3>Category List</h3>
                    </div>


                    <!-- /.card-header -->
                    <div class="">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-info">ID</th>
                                <th class="text-info">Category Name</th>
                                <th class="text-info">Image</th>
                                <th class="text-info">Status</th>
                                <th class="text-info">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                          @foreach($category as $value)
                                <tr>
                                    <td>{{$value -> id}}</td>
                                    <td>{{$value -> c_name}}</td>
                                    <td><img src="{{ asset('storage/product-image/'.$value->image) }}" widh="50" height="50"></td>
                                    <td>{{$value -> status}}</td>
                                    <td>
                                        <a href="{{route('editCategory',['id'=>$value->id])}}" class="btn btn-primary"><i class="far fa-edit "></i></a>

                                        <a href="{{route('deleteCategory',['id'=>$value->id])}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>




    </div>




@endsection
