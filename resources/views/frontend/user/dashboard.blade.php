@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <div class="row mb-4">
        <div class="col">

            <div class="clearfix text-center my-5">
                <p class=""><img src="{{ $logged_in_user->picture }}" class="user-profile-image rounded-circle" /></p>
                <p>{{ $logged_in_user->name }}</p>
            </div>


        </div><!-- row -->
    </div><!-- row -->
@endsection
