@extends('layouts.app')
@section('title')
    Login
@endsection

@section('content')
<div class="bg" style="background-image:url(img/illustration/cartoon-office.svg)">
    <div class="" style="background-color:transparent; color:white; background: rgba(0,0,0,0.7);">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-5">
                    <div class="gap"></div>
                    <h3 class="text-center" style="color:white;">Welcome back to Subletor</h3>
                    We are happy to have you back, we hope you enjoyed the features and services we offer, login to access them. Be part of a great revolution.
                </div>
                <div class="col-md-7">
                    @include('inc.messages')
                    <div class="" style="background-color:transparent; color:white;">
                        <h3 class="text-center" style="background-color:transparent; color:white;">Login</h3>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" style="background-color:transparent; color:white;" placeholder="e.g. Jane Doe" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" style="background-color:transparent; color:white;" placeholder="my secret password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <p>Don&apos;t have an account yet? <a href="{{ route('register') }}">Sign Up</a></p>
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
@endsection
