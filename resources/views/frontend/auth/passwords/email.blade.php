@extends('frontend.layouts.auth')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-5 align-self-center">
            <div class="login p-4">

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                {{ html()->email('email')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.email'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->

                    <div class="row">
                        <div class="col">
                            <div class="form-group clearfix">
                                {{ form_submit(__('labels.frontend.passwords.send_password_reset_link_button')) }}
                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->

                {{ html()->form()->close() }}

                <div class="row">
                    <div class="col">
                        <div class="form-group text-center">
                            <a href="{{ route('frontend.auth.login') }}">I remember my password</a>
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->

            </div><!-- login -->
        </div><!-- col-6 -->
    </div><!-- row -->
@endsection
