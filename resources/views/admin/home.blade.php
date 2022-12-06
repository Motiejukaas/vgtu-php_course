@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('app.admin.home.home_dashboard') }}</div>
                    <div class="card-body">


                            <table class="table table-hover">
                                <h4 class='card-title'>{{ __('app.admin.home.home_title') }}</h4>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('app.admin.home.table.course_id') }}</th>
                                    <th scope="col">{{ __('app.admin.home.table.name') }}</th>
                                    <th scope="col">{{ __('app.admin.home.table.surname') }}</th>
                                    <th scope="col">{{ __('app.admin.home.table.email') }}</th>
                                    <th scope="col">{{ __('app.admin.home.table.phone') }}</th>
                                    <th scope="col">{{ __('app.admin.home.table.birthdate') }}</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($courses_participants as $participant)
                                <tr class="data-row">
                                    <th scope="row">{{$participant->id}}</th>
                                    <td>{{$participant->courses_id}}</td>
                                    <td>{{$participant->name}}</td>
                                    <td>{{$participant->surname}}</td>
                                    <td>{{$participant->email}}</td>
                                    <td>{{$participant->phone}}</td>
                                    <td>{{$participant->birthdate}}</td>
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
