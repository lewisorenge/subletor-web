@extends('layouts.app')
@section('title')
    Affordable Office Spaces
@endsection

@section('description') 
    Find affordable and convinient offices from anywhere. Subletor links you with office sub-lessors so as 
    to eradicate the office space problem in the country.
@endsection

@section('keywords')
    subletor, sublet, office,offices, offics in nairobi, offices in nakuru,offices in mombasa, offices 
    in kisumu, offices in eldoret, offices in kenya, affrodable offices in nairobi, 
    affordable offices in kenya, office to let, where do i find an office, temporary 
    offices in nairobi, cheap offices, shared offices in nairobi, shared offices in kenya, affordable boadrooms in kenya, affordablle boadrooms in nairobi'
@endsection

@section('home', 'index, follow')
@section('content')
    <!-- TOP AREA -->
    <div class="top-area show-onload">
        <div class="bg-holder full">
            <div class="bg-front full-height bg-front-mob-rel">
                <div class="container full-height">
                    <div class="rel full-height">
                        <div class="tagline visible-lg" id="tagline"><span>Find</span>
                            <ul>
                                <li class="active">your perfect office</li>
                                <li>affordable offices</li>
                                <li>an office near you</li>
                                <li>a good workspace</li>
                            </ul>
                        </div>
                        <div class="search-tabs search-tabs-bg search-tabs-bottom mb50">
                            <div class="search-tabs search-tabs-bg">
                                <div class="tabbable">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-1">
                                            <h2>Search For Desired Offices</h2>
                                            
                                            @include('inc.search')
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="bg-holder full">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(img/196_365_300x300.jpg);"></div>
                </div>
            <div class="bg-img hidden-lg" style="background-image:url(img/196_365_2048x1365.jpg);"></div>
            <div class="bg-mask hidden-lg"></div>
        </div>
    </div>
    <!-- END TOP AREA  -->

    <div class="gap gap-small"></div>

    <div class="container">
        <div class="row">
            <div class="">
                <div class="row row-wrap" data-gutter="120">
                    <div class="col-sm-4 ">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-save box-icon-info box-icon-center round box-icon-big animate-icon-top-to-bottom"></i>
                            </header>
                            <div class="thumb-caption text-center">
                                <h5 class="thumb-title"><a class="text-darken" >Save Money</a></h5>
                                <p class="thumb-desc">Get to save money as an office seeker since you pay less and still get to run your office duties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-dollar box-icon-normal box-icon-center round box-icon-big animate-icon-top-to-bottom"></i>
                            </header>
                            <div class="thumb-caption text-center">
                                <h5 class="thumb-title"><a class="text-darken">Earn Money</a></h5>
                                <p class="thumb-desc">Get to earn money from the subtenant when they pay rent.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-lock box-icon-danger box-icon-center round box-icon-big animate-icon-top-to-bottom"></i>
                            </header>
                            <div class="thumb-caption text-center">
                                <h5 class="thumb-title"><a class="text-darken">Trust, Safety & Convinience</a></h5>
                                <p class="thumb-desc">Work with trusted office owners and in the most convinient environment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>

    <hr>
    <div class="container">
          
    
            <!-- START BLOG POST -->
            <div class="article post">
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#">What is Subletor?</a></h4> 
                    <p class="post-desciption">Description of what we do</p>
                   
                </div>
                <header class="post-header">
                    <iframe src="http://www.youtube.com/embed/7TUre51xeus" frameborder="0" allowfullscreen></iframe>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a class="text-darken" href="#"></a></h4>
                </div>
            </div>

    <div class="container">

        <div class="gap gap-small"></div>

        <div class="gap"></div>
        <h3 class="mb20">Available Offices</h3>                
        @if(count($properties) > 0)
            <div class="row row-wrap">
                    @foreach($properties as $property)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="{{ url('users/property/'.$property->id.'') }}">
                                        <img src="{{ asset('storage/offices/'.$property->propertyImage[0]->image_name) }} " alt="{{ $property->name }}" title="{{ $property->name }}" />
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    @if(count($property->propertyReviews)>0)
                                        <ul class="icon-group text-tiny text-color">
                                            {{-- @foreach($property->propertyReviews[1]->rating as $rating)
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            @endforeach --}}
                                        </ul>
                                    @else
                                        <p class="text-small"><em>No reviews yet.</em></p>
                                    @endif
                                    
                                    <h5 class="thumb-title"><a class="text-darken" href="{{ url('users/property/'.$property->id.'') }}">{{ $property->name }}</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> {{ $property->building }}, {{ $property->street_address }} </small>
                                    </p>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">KES {{ $property->price}}</span><small> avg/{{ $property->price_duration }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    {{-- <button class="btn btn-primary btn-sm pull-right" type="submit">Show all</button> --}}
            </div>
            <div class="row row-wrap">
                {{ $properties->render() }}
            </div>
        @else
            <p>
                Oooh! Seems there are no offices at the moment. Don't worry, you can checkout later.
            </p>
        @endif
        
    </div>

@endsection

