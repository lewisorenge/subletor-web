@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="page-title">My Property</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('account.inc.sidenav')
            </div>
            <div class="col-md-9">
                <a href="/host" class="btn btn-primary mb20"><i class="fa fa-plus-circle"></i> Share My Office</a>
                <div class="row row-no-gutter">
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="{{ asset('img/the_journey_home_400x300.jpg') }}" alt="Image Alternative text" title="the journey home" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</p><small class="text-white">July 6, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/el_inevitable_paso_del_tiempo_800x600.jpg" alt="Image Alternative text" title="El inevitable paso del tiempo" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Queens (LaGuardia Airport (LGA))</p><small class="text-white">July 5, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/viva_las_vegas_800x600.jpg" alt="Image Alternative text" title="Viva Las Vegas" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Queens (LaGuardia Airport (LGA))</p><small class="text-white">July 29, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/people_on_the_beach_800x600.jpg" alt="Image Alternative text" title="people on the beach" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</p><small class="text-white">July 18, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/gaviota_en_el_top_800x600.jpg" alt="Image Alternative text" title="Gaviota en el Top" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Jamaica, NY (Kennedy Airport (JFK))</p><small class="text-white">July 19, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/4_strokes_of_fun_800x600.jpg" alt="Image Alternative text" title="4 Strokes of Fun" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Bronx (Bronx)</p><small class="text-white">July 29, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/pictures_at_the_museum_800x600.jpg" alt="Image Alternative text" title="Pictures at the museum" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> New York, NY (Downtown - Wall Street)</p><small class="text-white">July 16, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/new_york_at_an_angle_800x600.jpg" alt="Image Alternative text" title="new york at an angle" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</p><small class="text-white">July 9, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/bridge_800x600.jpg" alt="Image Alternative text" title="Bridge" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</p><small class="text-white">July 4, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/street_800x600.jpg" alt="Image Alternative text" title="Street" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> New York, NY (Midtown East)</p><small class="text-white">July 25, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Long Island City, NY (Long Island City - Astoria)</p><small class="text-white">July 20, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/plunklock_live_in_cologne_800x600.jpg" alt="Image Alternative text" title="Plunklock live in Cologne" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> New York, NY (Downtown - Wall Street)</p><small class="text-white">July 20, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/fly_away_800x600.jpg" alt="Image Alternative text" title="Fly away" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> New York, NY (Downtown - Wall Street)</p><small class="text-white">July 11, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/pizza_hut_800x600.jpg" alt="Image Alternative text" title="Pizza Hut" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</p><small class="text-white">July 30, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <a class="hover-img" href="#">
                                <img src="img/me_800x600.jpg" alt="Image Alternative text" title="me" />
                                <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-inner-sm hover-hold">
                                    <div class="text-small">
                                        <p><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</p><small class="text-white">July 30, 2014</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
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
        </div>
    </div>

    <div class="gap"></div>
@endsection