@extends('layouts.app')

@section('title')
Subletor - Upload office
@endsection
@section('scripts')
  <script type="text/javascript" src="{{ asset('js/maps.js') }}">
  </script>
@endsection
  @section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}"> 
    <style>
      #navbar {
        overflow:auto;
      }
      #navbar{
        overflow: hidden;
        background-color: #fff;
      }
      .sticky {
        position: fixed;
        bottom: 0;
        width: 100%;
      }
    </style>
  @endsection

@section('content')
  <div class="container">
    {!! Form::open(['method' => 'POST', 'id' => 'regForm', 'action' => 'PropertyController@store', 'enctype' => 'multipart/form-data']) !!}
      {{ csrf_field() }}
      <h2 class="text-center">Upload Your Office: </h2>
      <!-- One "tab" for each step in the form: -->
      {{-- Office Location --}}
      <div class="tab row">
        <h3 class="text-center">Office Location</h3>
          <div class="col-md-5">
            <div class="gap"></div>
            Add your office's location to help the clients easily locate you when reporting for their booked stay. Use the examples given. 
            <img src="{{ asset('img/illustration/maps.gif') }}">
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="street_address">Street Address</label>
              <input type="text" name="street_address" id="street_address" placeholder="5th Avenue Ngong" class="form-control" aria-describedby="street_addressHelp" value="{{ old('street_address') }}" required>
                @if ($errors->has('street_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('street_address') }}</strong>
                    </span>
                @endif
              
            </div>
            <div class="form-group">
              <label for="building">Building Name</label>
              <input type="text" name="building" id="building" placeholder="Fun Plaza" class="form-control" aria-describedby="buildingHelp" value="{{ old('building') }}" required>
                @if ($errors->has('building'))
                    <span class="help-block">
                        <strong>{{ $errors->first('building') }}</strong>
                    </span>
                @endif
              
            </div>
            <div class="form-group">
              <label for="floor">Floor Number</label>
              <input type="text" name="floor" id="floor" placeholder="eg. 1st floor" class="form-control" aria-describedby="floorHelp" value="{{ old('floor') }}" required>
                @if ($errors->has('floor'))
                    <span class="help-block">
                        <strong>{{ $errors->first('floor') }}</strong>
                    </span>
                @endif
              
            </div>
            <div class="form-group">
              <label for="room">Room Number</label>
              <input type="text" name="room_number" id="room" placeholder="eg. Room X" class="form-control" aria-describedby="roomHelp" value="{{ old('room_number') }}" required>
                @if ($errors->has('room_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('room_number') }}</strong>
                    </span>
                @endif
              
            </div>
        </div>
      </div>

      {{-- Office Information --}}
      <div class="tab row">
        <h3 class="text-center">Office Information</h3>
        <div class="col-md-5">
          <div class="gap"></div>
          <p>
            Fill in information about your office such as the number of Seats and tables available for one to rent. The amenities you have 
            and a couple of office rules you have, also be sure to notify the clients if they can bring guests or not.
          </p>
          <div class="gap"></div>
          <img src="{{ asset('img/illustration/officeinfo.gif') }}">
        </div>
        <div class="col-md-7">
          <h4 class="form-label">Category</h4>
          <hr>
          <div class="form-group">
            @foreach($categories as $category)
              <div class="radio radio-switch">
                <label>
                  <div  title="{{$category->description}}">
                    <input class="i-radio" type="radio" name="category_id" value="{{ $category->id }}" required/>{{ $category->name }}
                  </div>
                  </label>
              </div>
            @endforeach
              @if ($errors->has('category_id'))
                  <span class="help-block">
                      <strong>{{ $errors->first('category_id') }}</strong>
                  </span>
              @endif
          </div>

          <div class="gap"></div>

          <h4 class="form-label">Amount of Space</h4>
          <hr>
          <div class="form-group form-group-lg form-group-select-plus">
              <label for="accomodates_count">Persons to Accomodate</label> &emsp;&emsp;
              <div class="btn-group btn-group-select-num" data-toggle="buttons">
                  <label class="btn btn-primary">
                    <input type="radio" name="accomodates_count" value="1" required/>1
                  </label>
                  <label class="btn btn-primary">
                      <input type="radio" name="accomodates_count" value="2" required/>2
                  </label>
                  <label class="btn btn-primary">
                      <input type="radio" name="accomodates_count" value="3" required/>3
                  </label>
                  <label class="btn btn-primary">
                      <input type="radio" name="accomodates_count" value="4" required/>4
                  </label>
                  <label class="btn btn-primary">
                      <input type="radio" name="accomodates_count" value="5" required/>5
                  </label>
                  <label class="btn btn-primary">
                      <input type="radio" name="accomodates_count"  required/>5+
                  </label>
              </div>
              <select class="form-control hidden col-md-2" name="accomodates_count"  required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="5">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
              </select>
          </div>

          <div class="gap"></div>

          <h4 class="form-label">Working Days and Hours</h4>
          <hr>
          <div class="row">
            <div class="form-group col-xs-6">
                <label for="opening_hours">Opening hours</label>
                <input name="opening_hours" id="opening_hours" class="time-pick form-control" type="text" required/>
                @if ($errors->has('opening_hours'))
                    <span class="help-block">
                        <strong>{{ $errors->first('opening_hours') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group col-xs-6">
                <label for="closing_hours">Closing hours</label>
                <input name="closing_hours" id="closing_hours" class="time-pick form-control" type="text" required/>
                @if ($errors->has('closing_hours'))
                    <span class="help-block">
                        <strong>{{ $errors->first('closing_hours') }}</strong>
                    </span>
                @endif
            </div>
          </div>

          <div class="form-group">
            <h5>Closed Days</h5>
            <div class="checkbox checkbox-stroke">
              <label for="saturdays">
                <input class="i-check" type="checkbox" id="saturdays" name="closed_days[]" value="saturdays"/>Saturdays</label>
            </div>
            <div class="checkbox checkbox-stroke">
              <label for="sundays">
                <input class="i-check" type="checkbox" id="sundays" name="closed_days[]" value="sundays"/>Sundays</label>
            </div>
            <div class="checkbox checkbox-stroke">
              <label for="holidays">
                <input class="i-check" type="checkbox" id="holidays" name="closed_days[]" value="holidays"/>Holidays</label>
            </div>
          </div>

          <h4 class="form-label">Amenities</h4>

          <hr>

          <div class="row">
            <div class="col-sm-6">
              @foreach($amenities->slice(0, (count($amenities)/2)) as $amenity)
                <div class="checkbox">
                  <label for="{{ $amenity->amenity }}">
                    <input class="i-check" type="checkbox" name="amenity_id[]" id="{{ $amenity->amenity }}" value="{{ $amenity->id }}"/>{{ $amenity->amenity }}
                  </label>
                </div>
              @endforeach
            </div>
            <div class="col-sm-6">
              @foreach($amenities->slice((count($amenities)/2), (count($amenities))) as $amenity)
                <div class="checkbox">
                  <label for="{{ $amenity->amenity }}">
                    <input class="i-check" type="checkbox" name="amenity_id[]" id="{{ $amenity->amenity }}" value="{{ $amenity->id }}"/>{{ $amenity->amenity }}
                  </label>
                </div>
              @endforeach
            </div>

            <div class="gap"></div>

            <h4 class="form-label">Rules</h4>

            <hr>

            <div class="form-group">
              <label for="rules"></label>
              <textarea rows="10" cols="30" name="rules" id="rules" class="form-control" placeholder="Enter rules and working conditions that you would llike to be observed by the sublease"></textarea>
              @if ($errors->has('rules'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rules') }}</strong>
                    </span>
                @endif
            </div>
          </div>
        </div>
      </div>

      {{-- Office and description --}}
      <div class="tab row"><h3 class="text-center">Office Name and Description</h3>
          <div class="col-md-5">
              <div class="gap"></div>
              <div class="gap"></div>
              <div class="gap"></div>
              <p>
                Fill in the Name and the office description.
              </p>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Marafiki Company" aria-describedby="nameHelp">
              @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              <small id="nameHelp" class="form-text text-muted">Give your listing a name.</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="It is a technology company that does coding most of the time"></textarea>
              @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
          </div>
      </div>

      {{-- Office Pricing --}}
      <div class="tab row">
        <h3 class="text-center">Pricing</h3>
        <div class="col-md-5">
          <p>
            Let clients know your office charge rates. Kindly equate the amenities you offer and  the location of the office 
             to come up with a standard charge. We use KES as the prefered currency.
          </p>
        </div>
        <div class="col-md-7">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="price">Price (KES)</label>
                <input type="number" min="100" class="form-control" name="price" id="price" placeholder="Price" aria-describedby="priceHelp" required value="">
                @if ($errors->has('price')) 
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
                <small id="priceHelp" class="form-text text-muted">Decide how much you would like to receive.</small>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="price_duration">Price Per</label>
                <select name="price_duration" id="price_duration" class="form-control" aria-describedby="price_durationHelp">
                  <option value="-1" selected>Choose</option>
                  <option value="hour">Hour</option>
                  <option value="day">Day</option>
                  <option value="week">Week</option>
                  <option value="2weeks">Fortnight</option>
                  <option value="month">Month</option>
                  <option value="3months">3 Months</option>
                </select>
                <small id="price_durationHelp" class="form-text text-muted">Is it okay for the subletor to be visited at the office?</small>
              </div>
            </div>
            <div class="col-sm-4"> 
              <div class="form-group">
                <label for="minimum_stay">Minimum Stay</label>
                <select name="minimum_stay" id="minimum_stay" class="form-control">
                  <option value="-1" selected>Choose</option>
                  <option value="hour">Hour</option>
                  <option value="day">Day</option>
                  <option value="week">Week</option>
                  <option value="2weeks">Fortnight</option>
                  <option value="month">Month</option>
                  <option value="3months">3 Months</option>
                </select>
                <small id="roomHelp" class="form-text text-muted">Room Number</small>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="checkbox checkbox-lg">
              <label>
                  <input class="i-check" type="checkbox" name="guests_allowed" value="1" aria-describedby="guests_allowedHelp"/>Can the subletor or the client be visited
              </label>
            </div>
            <small id="guests_allowedHelp" class="form-text text-muted">Is it okay for the subletor to be visited at the office?</small>
          </div>  
          <div class="form-group">
            <label for="start_date">Start Date</label>
            <input class="date-pick form-control" data-date-format="DD d MM yyyy" type="text" name="start_date" id="start_date" aria-describedby="start_dateHelp"/>
            <small id="start_dateHelp" class="form-text text-muted">From when do you want to receive guests.</small>
          </div>  
        </div>
      </div>

      {{-- Office upload photos --}}
      <div class="tab row"><h3 class="text-center">Upload Photos</h3>
          <div class="col-md-5">
            <div class="gap"><div class="gap"></div></div>
            Give the client a clear insight of how your office looks like by uploading clear photos of the space you are subleting.
          </div>
          <div class="col-md-7 upload-btn-wrapper">
            <h4 class="form-label">Upload a maximum of 6 photos.</h4><br>
            <button class="btn1">Upload pictures</button><br><br>
            <input type="file" name="property_image[]" id="office" multiple="multiple" onChange="readURL()this;"><br><br>
            <!--<img id="blah" src="#"  alt="your image"/>-->
            <div class="gallery">
            </div>
          </div>
      </div>
      
      {{-- Office payment --}}
      <div class="tab row"><h3 class="text-center">Payment Verification</h3>
        <div class="col-md-5">
          <div class="gap"><div class="gap"></div></div>
          To help our team verify if you are a legitimate office owner we charge a registration fee of <strong>KES 200</strong> only<br> Pay with your most preffered method.        </div>
            <div class="col-md-7">
              <div class="col-md-12">
                <h4>Payment method</h4>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" class="collapsed">
                                M-Pesa
                                <span class="pull-right">
                                  <img src="{{asset('img/payment_logos/mpesa-logo.png')}}" alt="" class="payment-logo">
                                </span>
                              </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse-1" style="height: 0px;">
                            <div class="panel-body">  
                            Currently on Promotion. FREE!!!
                              <ol>
                              <li>Go to M-Pesa menu</li>
                              <li>Send Money</li>
                              <li>Phone Number - 0791418641</li>
                              <li>Enter Amount 500</li>
                              <li>Enter PIN and Send</li>
                              </ol>
                          </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                                Equity
                                <span class="pull-right">
                                  <img src="{{asset('img/payment_logos/paypal.png')}}" alt="" class="payment-logo">
                                </span>
                              </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse-2" style="height: 0px;">
                            <div class="panel-body">
                            Currently on Promotion. FREE!!!
                            <ol>
                            <li>Transfer funds to account number 000000000000</li>
                            <li>Enter amount 500</li>
                            <li>Enter PIN</li>
                            </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="collapsed">
                                Paypal
                                <span class="pull-right">
                                  <img src="{{asset('img/payment_logos/paypal.png')}}" alt="" class="payment-logo">
                                </span>
                              </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse-3" style="height: 0px;">
                            <div class="panel-body">
                              Currently on Promotion. FREE!!!
                              {{-- <div class="form-group form-group-icon-left"><i class="fa fa-envelope-o input-icon input-icon-show"></i>
                                  <label for="paypal_email">Email</label>
                                  <input class="form-control" name="paypal_email" placeholder="" type="email" />
                              </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>

      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
      
      <div id="navbar" class="sticky" >
        <div class="navBtn pull-left">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        </div>
        <div class="navBtn pull-right">
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@section('extra-js')
  <script src="{{ asset('js/steps.js') }}"></script>
  <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetBottom;

    function myFunction() {
      if(window.pageYOffset <= sticky) {
        navbar.classList.add("sticky");
      }else {
        navbar.classList.remove("sticky");
      }
    }
  </script>

  {{-- CKEditor --}}
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'rules' );
      CKEDITOR.replace( 'description' );
  </script>
@endsection


@endsection
