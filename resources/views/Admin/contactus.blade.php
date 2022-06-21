@extends('layouts.admin')
@section('title', 'contact us')
@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-title">
                Contact Us
            </div>
            <div class="card-body col-sm-10">
                <form action="{{route('contact.us')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Heading</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$editcontact->Heading}}" name="Heading" class="form-control" id="title" placeholder="contact heading" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Phone </label>
                        <div class="col-sm-10">
                            <input type="number" name="phone" value="{{$editcontact->phone}}" class="form-control" id="title" placeholder="phone number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{$editcontact->email}}"  class="form-control" id="title2" placeholder="Contact email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                        <textarea name="address" class="form-control" placeholder="address" maxlength="255" rows="2"> {{$editcontact->address}}
                            </textarea>
                        </div>
                    </div>
                    <!-- <div class="form-group d-flex ">
                        <label for="summernote" class="col-sm-2 col-form-label">Phone</label>
                        <div class="card col-sm-10 card-outline">
                            <div class="card-body">
                                <textarea name="phone" id="summernote" required>
                                            Phone</br></br>
                                            Fax</br></br>
                                            <p style="color:green">+1 (514) 352-1010 +1 (514) 352-7511</p>
                                        </textarea>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group d-flex">
                        <label for="summernote" class="col-sm-2 col-form-label">Open Time</label>
                        <div class="card col-sm-10 card-outline">
                            <div class="card-body">
                            <textarea name="opentime" id="summernote1" required>
                            {{$editcontact->opentime}}
                            </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-3 btn-md">Cancel</button>
                        <button type="submit" class="btn btn-success btn-md">Update</button>
                    </div>

                </form>
            </div>

        </div>

    </div>

@endsection
