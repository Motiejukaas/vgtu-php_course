@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('bootstrap-datepicker-1.9.0/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('jquery-validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>
@endpush
@push('styles')
    <link href="{{ asset('bootstrap-datepicker-1.9.0/css/bootstrap-datepicker.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('app.header.main_page_title') }}</div>
                    <div class="card-body">

                        @foreach($courses as $course)
                            <table class="table">
                                <h4 class='card-title'>{{$course->name}}</h4>
                                <thead>
                                <tr>
                                    <th scope="col">{{ __('app.table.header.course_beginning') }}</th>
                                    <th scope="col">{{ __('app.table.header.course_duration') }}</th>
                                    <th scope="col">{{ __('app.table.header.course_price') }}</th>
                                    <th scope="col">{{ __('app.table.header.course_age') }}</th>
                                    <th scope="col">{{ __('app.table.header.course_registration') }}</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($course->data as $data)
                                    <tr class="data-row">
                                        <td>{{$data->beginning}}</td>
                                        <td>{{$data->duration}}  {{ __('app.table.row.duration_' . $data->duration_classifier_id) }}</td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->age}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" id="register-courses"
                                                    data-courses-id="{{$data->id}}">
                                                {{ __('app.table.button_registration') }}
                                            </button>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $course->description !!}<br><br><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>{{ __('app.registration_modal.header_success') }}</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('app.registration_modal.close') }}</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="registration-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div id="loading">
                    <div>
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border text-dark" role="status">
                                <span
                                    class="sr-only text-dark">{{ __('app.registration_modal.spinner.loading') }}</span>
                            </div>
                        </div>
                        <span class="text-dark">{{ __('app.registration_modal.spinner.please_wait') }}</span>
                    </div>
                </div>

                {!! Form::open(['route' => 'register.participant', 'id' => 'register-form', 'action' => 'javascript:void(0)']) !!}
                {{ Form::hidden('courses_id', '', ['id' => 'courses_id']) }}

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('app.registration_modal.header') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        {!! Form::label('name', __('app.registration_modal.form.name')) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        <span class="text-danger" id="error_name"></span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('surname', __('app.registration_modal.form.surname')) !!}
                        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
                        <span class="text-danger" id="error_surname"></span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('birthdate', __('app.registration_modal.form.birthdate')) !!}
                        {!! Form::text('birthdate', null, ['class' => 'form-control']) !!}
                        <span class="text-danger" id="error_birthdate"></span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', __('app.registration_modal.form.email')) !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com']) !!}
                        <span class="text-danger" id="error_email"></span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', __('app.registration_modal.form.phone')) !!}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+370</div>
                            </div>
                            {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => '8', 'placeholder' => '12345678']) !!}
                        </div>
                        <span class="text-danger" id="error_phone"></span>
                    </div>
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('app.registration_modal.close') }}</button>
                    {!! Form::submit( __('app.registration_modal.save'), ['id'=>'register', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
