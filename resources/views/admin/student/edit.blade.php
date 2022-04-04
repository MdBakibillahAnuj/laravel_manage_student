@extends('admin.home.home')
@section('title')
   EDIT
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-warning">
                        <div class="card-header">
                            <h3 class="text-center text-success">Update Students</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-student') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="student_id" value="{{ $student->id }}"/>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="{{ $student->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Age</label>
                                    <div class="col-md-9">
                                        <input type="text" name="age" class="form-control" value="{{ $student->age }}"/>
                                    </div>
                                </div> <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Class</label>
                                    <div class="col-md-9">
                                        <input type="text" name="s_class" class="form-control" value="{{ $student->s_class }}"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                        <img src="{{ asset($student->image) }}" alt="" style="height: 100px; width: 100px;">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Address</label>
                                    <div class="col-md-9">
                                        <textarea name="address" class="form-control" id="" cols="30" rows="3">{!! $student->address !!}</textarea>

                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Status</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" name="type" {{ $student->type == 1 ? 'checked' : '' }} value="1"/>one to five</label>
                                        <label for=""><input type="radio" name="type" {{ $student->type == 0 ? 'checked' : '' }} value="0"/>one to five</label>
                                    </div>
                                </div><div class="form-group row mt-3">
                                    <div class="col-md-9 mx-auto">
                                        <input type="submit" class="btn btn-success form-control" value="Update Student"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
