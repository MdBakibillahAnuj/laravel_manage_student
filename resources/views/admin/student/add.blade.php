@extends('admin.home.home')
@section('title')
    ADD
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-warning">
                        <div class="card-header">
                            <h3 class="text-center text-success">Add Students</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-student') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Age</label>
                                    <div class="col-md-9">
                                        <input type="text" name="age" class="form-control"/>
                                    </div>
                                </div> <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Class</label>
                                    <div class="col-md-9">
                                        <input type="text" name="s_class" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Address</label>
                                    <div class="col-md-9">
                                        <textarea name="address" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-form-label col-md-3">Student Address</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" name="type" value="0"/>one to five</label>
                                        <label for=""><input type="radio" name="type" value="1"/>six to ten</label>
                                    </div>
                                </div><div class="form-group row mt-3">
                                    <div class="col-md-9 mx-auto">
                                        <input type="submit" class="btn btn-success form-control" value="Add Student"/>
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
