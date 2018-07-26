@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="#">
                <h4>Lease your office</h4>
                <div class="col-md-6">
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                        <label>Where do you want the office?</label>
                        <input class="typeahead form-control" placeholder="City, Town, Point of Interest" type="text" />
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <select class="form-control ">
                                    <option value="entire_place" selected="selected">Entire Place</option>
                                    <option value="single">Single Office</option>
                                    <option value="shared">Shared Office</option>
                                    <option value="conference">Conference Hall</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control ">
                                    <option value="entire_place" selected="selected">for 4 workmates</option>
                                    <option value="single">for 4 workmates</option>
                                    <option value="shared">for 4 workmates</option>
                                    <option value="conference">Conference Hall</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name of your place</label>
                                <input type="text" class="form-control" value="" id="name" placeholder="Name of business" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    
                </div>
              
                <div class="clearfix"></div>
                <hr>
                <input type="submit" class="btn btn-primary" value="Save Changes">
            </form>
        </div>
    </div>
@endsection