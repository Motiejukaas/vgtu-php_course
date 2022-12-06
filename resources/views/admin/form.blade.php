@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('summernote-0.8.12/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('summernote-0.8.12/dist/lang/summernote-lt-LT.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
@endpush
@push('styles')
    <link href="{{ asset('summernote-0.8.12/dist/summernote-bs4.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('app.admin.create_course.title') }}</div>
                    <div class="card-body">


                        {!! Form::open(['method' => 'POST', 'route' => 'course.create', 'id' => 'create-course']) !!}

                        <div class="form-group">
                            {!! Form::label('name_lt', __('app.admin.create_course.form.name_lt')) !!}
                            {!! Form::text('name_lt', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('name_en', __('app.admin.create_course.form.name_en')) !!}
                            {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description_lt', __('app.admin.create_course.form.description_lt')) !!}
                            {!! Form::textarea('description_lt', null, ['id' => 'summernote0', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description_en', __('app.admin.create_course.form.description_en')) !!}
                            {!! Form::textarea('description_en', null, ['id' => 'summernote1', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        {!! Form::submit( __('app.admin.create_course.form.save'), ['id'=>'registerCourse', 'class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
