@extends('admin.home.home')
@section('title')
    Manage
@endsection
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-success text-center">Manage Student</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Name</td>
                                        <td>Age</td>
                                        <td>Class</td>
                                        <td>Image</td>
                                        <td>Address</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->age }}</td>
                                            <td>{{ $student->s_class }}</td>
                                            <td>
                                                <img src="{{ $student->image }}" alt="" style="height: 120px; width: 100px;">
                                            </td>
                                            <td>{!! $student->address !!}</td>
                                            <td>{{ $student->type ==  1 ? 'Group-B' : 'Group-A' }}</td>
                                            <td>
                                                <a href="{{ route('edit-student',['id'=>$student->id]) }}" class="btn btn-info btn-sm">Edit</a>
                                                <a href="{{ route('delete-student',['id'=>$student->id]) }}" class="btn btn-danger btn-sm">Del</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
