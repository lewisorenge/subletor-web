@extends('layouts.app')
@section('title')
    Signup
@endsection

@section('content')
<div class="bg" style="background-image:url(img/illustration/cartoon-office.svg); -webkit-filter: brightness(1.0); filter: brightness(1.0); background-attachment:fixed;">
<div>   
    <div class="" style="background-color:transparent; color:white; background: rgba(0,0,0,0.7);">
    <div class="container">
        <div class="gap"></div>
        <div class="row">
            <div class="col-md-5">
                    <div class="gap gap-big"></div>
                        
                             <h3 class="text-center" style="color:white;">Welcome to Subletor</h3>
                        <div class="text-left" style="color:white;">
                            Register to subletor to be able to access features such as office letting and getting office space.<br>
                            Join the movement!
                        </div> 
                    
            </div>
            <div class="col-md-7">
                    <div class="" style="background-color:transparent; color:white;">
                        <h3 class="text-center" style="background-color:transparent; color:white;">Register</h3>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label for="first_name" class="col-md-4 control-label">First Name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" style="background-color:transparent; color:white;" placeholder="e.g.  John" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="last_name" class="col-md-4 control-label">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" style="background-color:transparent; color:white;"  placeholder="e.g.   Doe" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" style="background-color:transparent; color:white;"  placeholder="e.g.  johndoe@example.com" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                    <label for="date_of_birth" class="col-md-4 control-label">Date of Birth</label>

                                    <div class="col-md-6">
                                        <input id="date_of_birth" style="background-color:transparent; color:white;" class="date-pick form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required>

                                        @if ($errors->has('date_of_birth'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('date_of_birth') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" style="background-color:transparent; color:white;"  placeholder="e.g. my secret password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" style="background-color:transparent; color:white;"  placeholder="e.g. my secret password" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <p>Already have an account?   <a href="{{ route('login') }}">Sign In</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
