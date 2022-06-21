@extends('layouts.admin')
@section('title', 'neworder')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card p-3">
                <div class="ml-4 d-flex justify-content-between ">
                    <div class=" card-title">
                        <h3>Order List</h3>
                    </div>
                    <div class="mr-4">
                        <a href="{{route('ordertable')}}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus-circle mr-2"></i>Add Order
                            </button>
                        </a>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-info">ID</th>
                                <th class="text-info">User Name</th>

                                <th class="text-info">Address(s)</th>
                                <th class="text-info">Phone</th>
                                <th class="text-info">Order At</th>
                                <th class="text-info">SKU</th>
                                <th class="text-info">Total Price</th>
                                <th class="text-info">Status</th>
                                <th class="text-info">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>User1</td>

                                <td>Dhaka,Bangladesh</td>
                                <td>+1235465455 </td>
                                <td>22 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 200</td>
                                <td>Received</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>


</div>



@endsection
