
{!! Form::open(['url' => '/search-results', 'method'=>'get', 'class'=>'my-form']) !!}
    <div class="row">
        <div class="col-md-4">
            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                <label>Location of office.</label>
                <input class="typeahead form-control" id="name" placeholder="City, Town, Point of Interest" type="text" name="name" required=""/>
            </div> 
        </div>
        <div class="col-md-8">
            <div class="input-daterange" data-date-format="M d, D">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                            <label>Check-in</label>
                            <input class="form-control" name="start" type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                            <label>Check-out</label>
                            <input class="form-control" name="end" type="text"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Search for Offices">
{{ Form::close() }}