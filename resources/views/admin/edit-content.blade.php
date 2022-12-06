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

                        {!! Form::open(['method' => 'POST', 'route' => 'edit.content', 'id' => 'edit-content']) !!}


                        <div class="form-group">
                            {!! Form::label('contacts_text_lt', __('app.admin.edit_pages.form.contacts_lt')) !!}
                            {!! Form::textarea('contacts_text_lt', null, ['id' => 'summernote2', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('about_text_lt', __('app.admin.edit_pages.form.about_lt')) !!}
                            {!! Form::textarea('about_text_lt', null, ['id' => 'summernote4', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contacts_text_en', __('app.admin.edit_pages.form.contacts_en')) !!}
                            {!! Form::textarea('contacts_text_en', null, ['id' => 'summernote3', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('about_text_en', __('app.admin.edit_pages.form.about_en')) !!}
                            {!! Form::textarea('about_text_en', null, ['id' => 'summernote5', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>


                        {{--<div class="form-group">
                            {!! Form::label('contacts_text_lt', __('app.admin.edit_pages.form.contacts_lt')) !!}
                            {!! Form::textarea('contacts_text_lt', null, ['id' => 'summernote2', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contacts_text_en', __('app.admin.edit_pages.form.contacts_en')) !!}
                            {!! Form::textarea('contacts_text_en', null, ['id' => 'summernote3', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('about_text_lt', __('app.admin.edit_pages.form.about_lt')) !!}
                            {!! Form::textarea('about_text_lt', null, ['id' => 'summernote4', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('about_text_en', __('app.admin.edit_pages.form.about_en')) !!}
                            {!! Form::textarea('about_text_en', null, ['id' => 'summernote5', 'class' => 'form-control', 'rows' => '3']) !!}
                        </div>--}}


                        {{-- @endforeach--}}
                        {!! Form::submit( __('app.admin.create_course.form.save'), ['id'=>'editContent', 'class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
