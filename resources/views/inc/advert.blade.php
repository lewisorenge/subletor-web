<nav class="navbar nav1 navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-form navbar-left">
    We are launching soon, be the first to know!
    </div>

    
      {!!Form::open(['action' => 'AdvertController@store', 'class'=> 'navbar-form navbar-right'])!!}
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      {!!Form::close()!!}

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
