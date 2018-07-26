@extends ('layouts.app')

@section('content')
    <div class="gap"></div>
   <div class="container">
            <h3 class="">You first have to Login/Register on Subletor</h3>
        </div>

        <div class="gap"></div>


        <div class="container">
            <div class="row" data-gutter="60">
                <div class="col-md-4">
                    <h3>Welcome to Subletor</h3>
                    <p>Subletor is a fast and reliable way to rent offices and get sublessors for your office. It allows you to earn money through subleasing your office to multiple office seekers in the market.</p>
                    <p>As an office seeker you save money since you get your work done in an affordable office space.</p>
                </div>
                <div class="col-md-4">
                    <h3>Login</h3>
                    <form>
                        <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                            <label>Username or email</label>
                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="my secret password" />
                        </div>
                        <a href="{{ url('/account/success') }}" class="btn btn-primary">Sign Up</a>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3>New To Subletor?</h3>
                    <form>
                        <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                            <label>Full Name</label>
                            <input class="form-control" placeholder="e.g. John Doe" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                            <label>Emai</label>
                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="my secret password" />
                        </div>
                        <a href="{{ url('/account/success') }}" class="btn btn-primary">Sign Up</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="gap"></div> 
        @endsection