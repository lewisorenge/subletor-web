@extends('layouts.app')
@section('title')
    {{auth()->user()->first_name}} {{auth()->user()->last_name}} My Listings
@endsection
    @section('extra-css')
        <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('inc.user-side-nav')
            </div>

            <div class="col-md-9">
                <h3 class="text-center">My Uploaded Listings</h3>
                <div class="row">
                    @include('inc.messages')
                </div>
                <div class="row">
                    <a class="btn btn-ghost btn-primary pull-right" href="property/create">Add Listing</a>
                </div>

                @if(count($properties) > 0)
                    <ul class="booking-list booking-list-wishlist">
                        @foreach($properties as $property)
                            <li><span class="booking-item-wishlist-title"><i class="fa fa-building-o"></i> {{ $property->category->name }} Office <span >added on {{ Carbon\Carbon::parse($property->created_at)->format('M d, Y') }}</span></span>
                                {{-- <a class="fa fa-times booking-item-wishlist-remove" href="#" rel="tooltip" data-placement="top" title="remove from wishlist"></a> --}}
                                <a class="booking-item" href="{{ url('/users/property/'.$property->id.'/edit') }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="booking-item-img-wrap">
                                                <img src="{{ asset('storage/offices/'.$property->propertyImage[0]->image_name) }}" alt="Image Alternative text" title="{{ $property->category->name }}" />
                                               
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="booking-item-title">{{ $property->name }}</h5>
                                            <p class="booking-item-address"><i class="fa fa-map-marker"></i> {{ $property->street_address }}</p><small class="booking-item-last-booked">Latest booking: 56 minutes ago</small>
                                        </div>
                                        <div class="col-md-3">
                                            {{-- <span class="booking-item-price-from">for</span> --}}
                                            <span>KES</span>
                                            <span class="booking-item-price"> {{ (int)$property->price }}</span>
                                            <span>/{{ $property->price_duration }}</span>
                                            <span class="btn btn-primary">Edit</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach  
                            <li>
                                {{ $properties->links() }}
                            </li>          
                    </ul>


                @else
                    <p>
                        <span class="text-lg">
                            <span class="fa fa-info"></span>No properties yet.
                        </span>
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
@endsection