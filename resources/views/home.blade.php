@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome, {{ auth()->user()->first_name }}</h2>
    <div class="row row-no-gutter">
        @if(count($properties) > 0)
            @foreach($properties as $property)
                <div class="col-md-4">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="{{ asset('img/the_journey_home_400x300.jpg') }}" alt="Image Alternative text" title="the journey home" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                <div class="text-small">
                                    <p><i class="fa fa-map-marker"></i> {{$property->street_address}}, {{$property->building}}, {{$property->floor}}</p><small class="text-white">{{ Carbon::parse($property->created_at)->format('d M, Y') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
        @else
        @endif
    </div>
</div>
@endsection
