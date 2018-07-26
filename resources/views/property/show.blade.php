@extends('layouts.app')
@section('title')
    {{ $property->name }} in {{ $property->street_address }}
@endsection
    @section('extra-css')
        <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
    @endsection

@section('content')
<div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
        </ul>

        <div class="booking-item-details">
            <header class="booking-item-header">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="lh1em">{{ $property->name }}</h2>
                        <p class="lh1em text-small"><i class="fa fa-map-marker"></i> {{ $property->building }}, {{ $property->street_address }}, {{ $property->floor }}, {{ $property->room_number }}</p>
                        <ul class="list list-inline text-small">
                            <li>
                                <a href="mailto:{{ $property->user->email }}">
                                    <i class="fa fa-envelope"></i> {{ $property->user->email }}
                                </a>
                            </li>
                            {{-- Agent Website 
                            <li>
                                @if($property->user->phoneNumber != null)
                                    <a href="{{ $property->user->email }}">
                                        <i class="fa fa-home"></i> Agent Website
                                    </a>
                                @endif
                            </li>
                            --}}
                            <li>
                                @if($property->user->phoneNumber != null)
                                    <i class="fa fa-phone"></i>
                                    {{ $property->user->phoneNumber }}
                                @else
                                    <a href="#">
                                        <i class="fa fa-phone"></i> No phone provided
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="booking-item-header-price"><span class="text-lg">KES {{ number_format($property->price) }}</span>/{{ $property->price_duration }}</p>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-md-7">
                    <div class="tabbable booking-details-tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-camera"></i>Photos</a>
                            </li>
                            <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>On the Map</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                                    @if(count($propertyImages)>0)
                                        @foreach($propertyImages as $image)
                                            <img src="{{ asset('storage/offices/'.$image->image_name.'') }}" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                        @endforeach
                                    @else
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="google-map-tab">
                                <div style="width:100%; height:500px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.23337056698!2d36.7831814!3d-1.2892173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4eb6d6e1e16b4153!2siHub!5e0!3m2!1sen!2ske!4v1528986534209" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="booking-item-meta">
                        <h4 class="lh1em mt40">Available for booking</h4>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <a class="hover-img" href="#">
                                <img  src="{{ asset('img/host.jpeg') }}" alt="Image Alternative text" title="Upper Lake in New York Central Park" />
                                <div class="hover-inner">
                                <p>{{ $property->category->description}}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <p>
                                {{ $property->category->name}} Office
                            </p>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-xs-6"></div>
                            <div class="col-xs-6">
                            <p>
                                {{ $property->accomodates_count}} Persons
                            </p>  
                        </div>
                    </div> 

                    @if(count($propertyReviews)>0)
                        <div class="booking-item-rating">
                            <ul class="icon-list icon-group booking-item-rating-stars">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul><span class="booking-item-rating-number"><b >4.7</b> of 5 <small class="text-smaller">guest rating</small></span>
                            <p><a class="text-default" href="#">based on our assesement</a>
                            </p>
                        </div>
                    @else
                        <p>
                            <i>No reviews yet.</i> 
                        </p>
                    @endif
                    <div class="booking-item-dates-change">
                        {!! Form::open(['action' => 'BookingController@store', 'method' => 'POST']) !!}
                            <div class="input-daterange" data-date-format="MM d, DD">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                            <label for="start">Check in</label>
                                            <input class="form-control" name="start" id="start" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                            <label for="end">Check out</label>
                                            <input class="form-control" name="end" id="end" type="text" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-select-plus">
                                        <label for="persons">Persons</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="persons" value="1"/>1
                                            </label>
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="persons" value="2" />2
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="persons" value="3" />3
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="persons" value="4" />4
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="persons" />5+
                                            </label>
                                        </div>
                                        <select class="form-control hidden">
                                            <option>1 Person</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option selected="selected">5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                                    </div>
                                </div>
                            </div>
                            {{Form::hidden('property_id', $property->id)}}
                            {{Form::hidden('user_id', $property->user_id)}}
                        {!! Form::close() !!}
                    </div>                     
                </div>  
                <div class="col-md-7">
                    <div class="gap gap-sm"></div>
                    <ul class="booking-item-reviews list">
                        <li>
                            <div class="row">
                                <div class="col-xs-2">
                                    <div class="booking-item-review-person text-center">
                                        <a class="booking-item-review-person-avatar round" href="#">
                                            <img src="{{ asset('img/icons/male-user.svg') }}" alt="Image Alternative text" title="Bubbles" />
                                        </a>
                                        <p class="booking-item-review-person-name"><a href="#">{{$property->user->first_name}} {{$property->user->last_name}}</a>
                                        </p>
                                        <p class="booking-item-review-person-loc">{{$property->name}}</p>
                                        {{-- <small><a href="#">119 Reviews</a></small> --}}
                                    </div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="booking-item-review-content">
                                        <h5>{{$property->town}}</h5>
                                        <p>
                                                {{ substr($property->user->about, 0, 150)}}
                                            <span class="booking-item-review-more"> 
                                                {{ substr($property->user->about, 150, strlen($property->user->about))}}
                                            </span>
                                        </p>
                                        <div class="booking-item-review-expand">
                                            <span class="booking-item-review-expand-more">More <i class="fa fa-angle-down"></i></span>
                                            <span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

            <div class="gap"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="booking-item-review-content">
                        <h4>Amenities</h4>
                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            @if(count($propertyAmenities) > 0)                                        
                                @foreach($propertyAmenities as $propertyAmenity)
                                    <li>
                                        <div class="row vertical-align">
                                            <div class="col-md-6">
                                                <a class="hover-img" href="#">
                                                    <img src="{{asset('img/amenity/'.$propertyAmenity->amenity->icon)}}" alt="Image Alternative text" title="The Big Showoff-Take 2" />
                                                    <h5 class="hover-title-center">{{$propertyAmenity->amenity->amenity}}</h5>
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    {{$propertyAmenity->amenity->amenity}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <div class="gap gap-sm"></div>
                                @endforeach
                            @else
                                {{-- No amenities to show --}}
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="booking-item-review-content">
                        <h4>Property description</h4>
                        <p>
                            {!! $property->description !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="booking-item-review-content">
                        <h4>House Rules</h4>
                        <p>
                            {!! $property->rules !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="gap gap-small"></div>

            
            <div class="row row-wrap">
                <div class="col-md-8">
                    <div class="booking-item-review-content">
                        <h4>Property Reviews</h4>
                        @if(count($propertyReviews) > 0)
                            @foreach($propertyReviews as $propertyReview)
                                <ul class="booking-item-reviews list">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="booking-item-review-person">
                                                    <a class="booking-item-review-person-avatar round" href="#">
                                                        <img src="img/afro_70x70.jpg" alt="Image Alternative text" title="Afro" />
                                                    </a>
                                                    <p class="booking-item-review-person-name"><a href="#">John Doe</a>
                                                    </p>
                                                    <p class="booking-item-review-person-loc">Palm Beach, FL</p><small><a href="#">98 Reviews</a></small>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="booking-item-review-content">
                                                    <h5>"Tempus vestibulum mus imperdiet nibh sem"</h5>
                                                    <ul class="icon-group booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p>Pharetra quis netus vel vehicula class vestibulum nisl donec hendrerit fermentum magna sed amet purus sit nec class sit fringilla tellus volutpat per eget molestie<span class="booking-item-review-more"> Platea suspendisse eget tortor pharetra magna nam senectus tristique cursus ut odio sollicitudin venenatis natoque dis maecenas magna dignissim sociosqu et sociis accumsan interdum dictum netus quis enim phasellus suscipit nunc donec purus dui himenaeos nulla sociosqu rhoncus dictumst fusce ultricies congue sapien porttitor maecenas fringilla ipsum nam lorem aliquam rhoncus elit himenaeos</span>
                                                    </p>
                                                    <div class="booking-item-review-more-content">
                                                        <p>Facilisis auctor nostra cubilia pretium ante a enim interdum ullamcorper erat pharetra varius imperdiet praesent tempor justo placerat eleifend senectus laoreet mi cubilia volutpat augue convallis facilisi gravida vehicula duis aliquam habitant cras accumsan dis vitae eleifend duis convallis</p>
                                                        <p>Porta gravida auctor phasellus luctus ante et dignissim sagittis leo aptent malesuada nibh convallis cras velit himenaeos dis pretium interdum bibendum elementum morbi dignissim dis habitant senectus curabitur placerat consequat est nunc ad ornare commodo luctus curabitur mi aliquet aliquam nec sollicitudin fames cubilia elit donec nostra cum nullam porta dignissim tortor porta turpis quam pretium ultricies</p>
                                                        <p class="text-small mt20">Stayed March 2014, traveled as a couple</p>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <ul class="list booking-item-raiting-summary-list">
                                                                    <li>
                                                                        <div class="booking-item-raiting-list-title">Sleep</div>
                                                                        <ul class="icon-group booking-item-rating-stars">
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="booking-item-raiting-list-title">Location</div>
                                                                        <ul class="icon-group booking-item-rating-stars">
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o text-gray"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="booking-item-raiting-list-title">Service</div>
                                                                        <ul class="icon-group booking-item-rating-stars">
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="list booking-item-raiting-summary-list">
                                                                    <li>
                                                                        <div class="booking-item-raiting-list-title">Clearness</div>
                                                                        <ul class="icon-group booking-item-rating-stars">
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="booking-item-raiting-list-title">Rooms</div>
                                                                        <ul class="icon-group booking-item-rating-stars">
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                            <li><i class="fa fa-smile-o"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="booking-item-review-expand"><span class="booking-item-review-expand-more">More <i class="fa fa-angle-down"></i></span><span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>
                                                    </div>
                                                    <p class="booking-item-review-rate">Was this review helpful?
                                                        <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a><b class="text-color"> 13</b>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <p>
                                There are no reviews on properties yet.
                            </p>
                        @endif
                    </div>

                    <div class="gap gap-small"></div>

                    @if(count($leave_booking_review) > 0)
                        <div class="box bg-gray">
                            <h5>Write a Review</h5>
                            {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST']) !!}
                                {{Form::token()}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Review Title</label>
                                            <input name="title" id="title" class="form-control" type="text" />
                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" id="comment" class="form-control" rows="6"></textarea>
                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list booking-item-raiting-summary-list stats-list-select">
                                            <li>
                                                <div class="booking-item-raiting-list-title">Sleep</div>
                                                <ul class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Location</div>
                                                <ul class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Service</div>
                                                <ul class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Clearness</div>
                                                <ul class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="booking-item-raiting-list-title">Rooms</div>
                                                <ul class="icon-group booking-item-rating-stars">
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                    <li><i class="fa fa-smile-o"></i>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <input class="btn btn-primary" type="submit" value="Leave a Review" />
                                    </div>
                                </div>
                                {{Form::hidden('property_id', $property->id)}}
                                {{Form::hidden('review_by_user', $property->user_id)}}
                                {{Form::hidden('booking_id', 1)}}
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="booking-item-review-content">
                        <h4>Recent Listings</h4>
                        <ul class="booking-list">
                            @if(count($recentListings) > 0)
                                @foreach($recentListings as $recentListing)
                                    <a href="{{ url('/property/'.$recentListing->id.'') }}" title="{{$recentListing->name}}">
                                        <li>
                                            <div class="booking-item booking-item-small">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <img src="{{ asset('storage/offices/'.$recentListing->propertyImage[0]->image_name) }}" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <h5 class="booking-item-title">{{ $recentListing->name }}</h5>
                                                        <ul class="icon-group booking-item-rating-stars">
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star-half-empty"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-3"><span class="booking-item-price">KES {{ $recentListing->price}} / {{ $recentListing->price_duration }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                @endforeach
                            @else
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap gap-small"></div>
    </div>

@endsection

@section('extra-js')
{{-- CKEditor --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'rules' );
    CKEDITOR.replace( 'description' );
</script>
@endsection