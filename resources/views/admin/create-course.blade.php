@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('app.admin.create_course.title') }}</div>
                    <div class="card-body">


                        <a href="{{ route('course.form') }}" type="button" class="btn btn-primary">
                            Create a course
                        </a><br><br>


                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Kursas</th>
                                <th scope="col">Mygtukai</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{$course-> id}}</th>
                                    <td>{{$course->name}}</td>
                                    <td class="table-buttons">
                                        <button type="button" class="btn btn-info btn-sm">View</button>
                                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
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
@endsection
