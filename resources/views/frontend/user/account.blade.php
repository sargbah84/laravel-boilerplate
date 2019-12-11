@extends('frontend.layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center mb-3">
        <div class="col col-sm-5 align-self-center">

            <div class="clearfix text-center my-5">
                <p class=""><img src="{{ $logged_in_user->picture }}" class="user-profile-image rounded-circle" /></p>
                <p>{{ $logged_in_user->name }}</p>
            </div>
                
            <div role="tabpanel">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a href="#edit" class="nav-link active" aria-controls="edit" role="tab" data-toggle="tab">@lang('labels.frontend.user.profile.update_information')</a>
                    </li>

                    @if($logged_in_user->canChangePassword())
                        <li class="nav-item">
                            <a href="#password" class="nav-link" aria-controls="password" role="tab" data-toggle="tab">@lang('navs.frontend.user.change_password')</a>
                        </li>
                    @endif
                </ul>

                <div class="tab-content mt-4">
                    <div role="tabpanel" class="tab-pane fade show active pt-3" id="edit" aria-labelledby="edit-tab">
                        @include('frontend.user.account.tabs.edit')
                    </div><!--tab panel profile-->

                    @if($logged_in_user->canChangePassword())
                        <div role="tabpanel" class="tab-pane fade show pt-3" id="password" aria-labelledby="password-tab">
                            @include('frontend.user.account.tabs.change-password')
                        </div><!--tab panel change password-->
                    @endif
                </div><!--tab content-->
            </div><!--tab panel-->

            <div class="row mt-3">
                <div class="col">
                    <div class="form-group text-center">
                        <a href="#" class="text-danger">Delete My Account</a>
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->

        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection
