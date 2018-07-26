@extends('layouts.app')

@section('title')
    Search for office
@endsection
    @section('extra-css')
        <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
        <style>
            h3.search-filter{
                padding: 0 20px;
            }
        </style>
    @endsection
    @section('description') 
    Search and find offices by location using subletor. This conviniences the seeker as getting to the office is easened.
@endsection

@section('keywords', 'subletor, sublet, how to sublet, how to find offices, office,offices, offics in nairobi, offices in nakuru,offices in mombasa, offices in kisumu, offices in eldoret, offices in kenya, affrodable offices in nairobi, affordable offices in kenya, office to let, where do i find an office, temporary offices in nairobi, cheap offices, shared offices in nairobi, shared offices in kenya, affordable boadrooms in kenya, affordablle boadrooms in nairobi')

@section('content')

<div class="container">
    <ul class="breadcrumb">
        <li><a href="/">Home</a>
        </li>
        <li><a href="#">Search</a>
        </li>
        {{-- <li><a href="#">New York (NY)</a>
        </li>
        <li><a href="#">New York City</a>
        </li>
        <li class="active">New York City Hotels</li> --}}
    </ul>
    <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
        <h3>Search for Office</h3>
        @include('inc.search');
    </div>
    <h3 class="booking-title">
        Offices in {{$request->name}}
        <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small>
    </h3>
    <div class="row">
        <div class="col-md-3">
            <aside class="booking-filters booking-filters-white">
                {{ Form::open(['url' => ['/search-results'], 'method' => 'get']) }}
                    <h3 class="search-filter">Filters <button type="submit" class="btn btn-primary btn-sm pull-right">Update</button></h3>
                    <ul class="list booking-filters-list">
                        <li>
                            <h5 class="booking-filters-title">Price</h5>
                            <input type="text" id="price-slider">
                        </li>

                        {{-- Star rating
                        <li>
                            <h5 class="booking-filters-title">Star Rating</h5>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />5 star (220)</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />4 star (112)</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />3 star (75)</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />2 star (60)</label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />1 star (20)</label>
                            </div>
                        </li> 
                        --}}

                        {{-- Category --}}
                        @if(count($categories) > 0) 
                        <li>
                            <h5 class="booking-filters-title">Category</h5>
                            @foreach($categories as $category)
                                @if($cat_id == $category->id)
                                    <div class="radio radio-switch">
                                        <label>
                                        <input class="i-radio" type="radio" name="category" value="{{$category->id}}" checked/>{{$category->name}}</label>
                                    </div>
                                @else
                                    <div class="radio radio-switch">
                                        <label>
                                        <input class="i-radio" type="radio" name="category" value="{{$category->id}}"/>{{$category->name}}</label>
                                    </div>
                                @endif
                            @endforeach
                        </li>
                        @endif

                        @if(count($amenities) > 0)                              
                            <li>
                                <h5 class="booking-filters-title">Amenities</h5>
                                @foreach($amenities as $amenity)
                                        <div class="checkbox">
                                            <label>
                                                <input class="i-check" type="checkbox" name="amenities[]" value="{{$amenity->id}}"/>{{ $amenity->amenity }}</label>
                                        </div>
                                @endforeach
                            </li>
                        @endif
                        
                    </ul>
                {{ Form::close() }}
            </aside>
        </div>
        <div class="col-md-9">
            <div class="nav-drop booking-sort">
                <h5 class="booking-sort-title"><a href="#">Sort: Aviability<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                <ul class="nav-drop-menu">
                    <li><a href="#">Price (low to high)</a>
                    </li>
                    <li><a href="#">Price (hight to low)</a>
                    </li>
                    {{-- 
                    <li><a href="#">Ranking</a>
                    </li>
                    <li><a href="#">Distance</a>
                    </li>
                    <li><a href="#">Number of Reviews</a>
                    </li>
                     --}}
                </ul>
            </div>
            <ul class="booking-list">
                @if(count($properties) > 0)
                    @foreach($properties as $property)
                        <li>
                            <a class="booking-item" href="{{ url('/office/'.$property->id.'') }}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="{{$property->name}}" />
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>12</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {{-- 
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b >3.8</b> of 5</span><small>(308 reviews)</small>
                                        </div>
                                        --}}
                                        <h5 class="booking-item-title">{{ $property->name}}</h5>
                                        <p class="booking-item-address">
                                            <i class="fa fa-map-marker"></i> {{ $property->street_address }}, {{ $property->building }}
                                        </p>
                                        {{-- <small class="booking-item-last-booked">Latest booking: 6 hours ago</small> --}}
                                    </div>
                                    <div class="col-md-3">
                                        <span class="booking-item-price-from">from</span>
                                        <span class="booking-item-price">Ksh {{ $property->price }}</span><span>/{{ $property->price_duration }}</span><span class="btn btn-primary">Book Now</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        {{-- <small>521 hotels found in New York. &nbsp;&nbsp;Showing 1 – 15</small> --}}
                    </p>
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">6</a>
                        </li>
                        <li><a href="#">7</a>
                        </li>
                        <li class="dots">...</li>
                        <li><a href="#">43</a>
                        </li>
                        <li class="next"><a href="#">Next Page</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <p>Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
</div>


@endsection

@section('extra-js')
@endsection