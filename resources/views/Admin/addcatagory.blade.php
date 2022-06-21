@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3> Catagories </h3>
        </div>
        <div class="card-body d-flex justify-content-between ">
            <div class="col-lg-3">
                <form action="{{route('addcatagory')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="c_name" type="text" class="form-control form-control-md" id="exampleInputEmail1"
                            placeholder="Category Name" required>

                    </div>
                    <div class="form-group ">
                        <label for="parentcatagory">Catagory Type</label>
                        <select name="category" id="parentcatagory" class="form-control form-control-md" required>
                            <option value="0">Parent Category</option>
                            @foreach($category as $value){
                                <option value="{{$value->id}}">{{$value->c_name}}</option>
                            }
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group ">
                        <label for="file">Choose image</label>
                        <input name="image" type="file"  id="file" required>
                    </div>

                    <div class="form-group ">
                        <label for="catagoryStatus">Status</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check mr-2">
                                <input class="form-check-input" type="radio" value="1" name="status" checked="">
                                <label class="form-check-label">Active</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" name="status">
                                <label class="form-check-label">In Active</label>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Add New Category</button>
                </form>
            </div>

            <div class="card col-lg-8 ">
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
                                    <a href="{{route('subcategory',['id'=>$value->id])}}" class="btn btn-success"><i class="far fa-check-circle"></i></a>
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
