@extends('layouts.app')
@section('title')
    {{$user->first_name}} {{$user->last_name}} Edit Account
@endsection
@section('extra-js')
    <style>
        .phone-number-section{
            border: 1px solid #cccccc;
            border-radius: 2px;
            padding: 10px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-3">
            @include('inc.user-side-nav')
        </div>
        
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-5">
                    {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST']) !!}
                        <h4>Personal Infomation</h4>
                        @include('inc.messages')
                        <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                            <label>First Name</label>
                            <input class="form-control" name="first_name" value="{{ $user->first_name }}" type="text" />
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                            <label>Last Name</label>
                            <input class="form-control" name="last_name" value="{{ $user->last_name }}" type="text" />
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-calendar-o input-icon"></i>
                            <label>Birth Date</label>
                            <input type="date" class="form-control" name="date_of_birth" value="{{ $user->date_of_birth }}"/>
                            @if ($errors->has('date_of_birth'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_of_birth') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon"></i>
                            <label>E-mail</label>
                            <input class="form-control" name="email" value="{{ $user->email }}" type="email" readonly/>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Describe Yourself</label>
                            {{Form::textarea('about', $user->about, ['id' => 'about','class' => 'form-control', 'placeholder' => 'Once upon a time...'])}}
                            @if ($errors->has('about'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('about') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="gap gap-small"></div>
                        {{ Form::hidden('_method', 'PATCH')}}
                        {{-- <hr> --}}
                        {{Form::submit('Update', ['class' => 'btn btn-primary btn-block', 'value' => 'Save Changes'])}} 
                        
                    {!! Form::close() !!}
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <h4>Contact Information</h4>
                    <h5>Phone Number</h5>
                    @if(count($phoneNumbers)>0)
                    <div class="edit-section">
                        {!! Form::open() !!}
                            @foreach($phoneNumbers as $phoneNumber)
                                <div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
                                    <input class="form-control" name="phoneNumber" value="{{ $user->phoneNumber }}" type="text" placeholder="eg 254712*****8"/>

                                        @if ($errors->has('phoneNumber'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phoneNumber') }}</strong>
                                            </span>
                                        @endif
                                    <div class="row">
                                        @if($phoneNumber->verified != 'yes')
                                            <div class="col-md-6">
                                                <small class="alert-danger">Not verified</small>
                                                <a href="/users/" class="btn btn-default btn-sm pull-right">Verify</a>
                                            </div>
                                            <div class="col-md-6">
                                                {{--  --}}
                                            </div>
                                        @else
                                        @endif
                                    </div> 
                                </div>
                            @endforeach

                            {{ Form::hidden('_method', 'PATCH')}}
                            {{Form::submit('Update', ['class' => 'btn btn-primary btn-block', 'value' => 'Save Changes'])}}
                        {!! Form::close() !!}

                        <hr>
                    </div>
                    @else
                        <a href="/users/" class="btn btn-default btn-sm">Add</a>
                    @endif

                    <div class="gap gap-sm"></div>

                    <div class="edit-section">
                        <h4>Change Password</h4>
                        <form>
                            <div class="form-group form-group-icon-left"><i class="fa fa-unlock-alt input-icon"></i>
                                <label>Current Password</label>
                                <input class="form-control" name="old_pass" type="password" />
                            </div>
                            <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                <label>New Password</label>
                                <input class="form-control" name="password" type="password" />
                            </div>
                            <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                <label>New Password Again</label>
                                <input class="form-control" name="password_confirmation" type="password" />
                            </div>
                            <hr />
                            <input class="btn btn-primary" type="submit" value="Change Password" />
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

 
@section('extra-js')
    {{-- CKEditor --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    {{-- //End CKEditor --}}
@endsection

@endsection