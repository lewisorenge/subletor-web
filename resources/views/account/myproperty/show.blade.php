@extends('layouts.app')

@section('content')


<div class="container">
    <ul class="breadcrumb">
        <li><a href="index-2.html">Home</a>
        </li>
        <li><a href="#">Kenya</a>
        </li>
        <li><a href="#">Nairobi</a>
        </li>
        <li><a href="#">Huligharm</a>
        </li>
        <li><a href="#">Galana Road</a>
        </li>
        <li class="active">iHub Kenya</li>
    </ul>
    <div class="booking-item-details">
        <header class="booking-item-header">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="lh1em">iHub Kenya</h2>
                    <p class="lh1em text-small"><i class="fa fa-map-marker"></i> Hulingharm, Galana Road, Senteu Plaza</p>
                    <ul class="list list-inline text-small">
                        <li><a href="mailto:info@ihub.co.ke"><i class="fa fa-envelope"></i> Agent E-mail</a>
                        </li>
                        <li><a href="https://ihub.co.ke/"><i class="fa fa-home"></i> Agent Website</a>
                        </li>
                        <li><i class="fa fa-phone"></i>+254 798 985 410</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="booking-item-header-price"><span class="text-lg">KES 1600</span>/day</p>
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
                                <img src="{{ asset('img/hotel_porto_bay_liberdade_2048x1293.jpg') }}" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                <img src="{{ asset('img/hotel_porto_bay_liberdade_800x600.jpg') }}" alt="Image Alternative text" title="hotel PORTO BAY LIBERDADE" />
                                <img src="{{ asset('img/hotel_1_800x600.jpg') }}" alt="Image Alternative text" title="hotel 1" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="google-map-tab">
                            <div style="width:100%; height:500px;"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.23337056698!2d36.7831814!3d-1.2892173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4eb6d6e1e16b4153!2siHub!5e0!3m2!1sen!2ske!4v1528986534209" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="booking-item-meta">
                    <h2 class="lh1em mt40">Best Deal!</h2>
                    <h3>97% <small >recommended</small></h3>
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
                </div>
                <div class="booking-item-dates-change">
                    <form>
                        <div class="input-daterange" data-date-format="MM d, DD">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                        <label>Check in</label>
                                        <input class="form-control" name="start" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                        <label>Check out</label>
                                        <input class="form-control" name="end" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group- form-group-select-plus">
                                    <label>Guests</label>
                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />1</label>
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" />2</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />4</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />4+</label>
                                    </div>
                                    <select class="form-control hidden">
                                        <option>1</option>
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
                            <div class="col-md-6">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="gap gap-small"></div>	<a href="{{ url('/account/payment')}}" class="btn btn-primary btn-lg">Book Now</a>
            </div>
        </div>
        <div class="gap"></div>
        <div class="row">
            <div class="col-md-3">
                <h3>Amenities</h3>
                <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                    <li><i class="im im-wi-fi"></i><span class="booking-item-feature-title">Wi-Fi Internet</span>
                    </li>
                    <li><i class="im im-parking"></i><span class="booking-item-feature-title">Parking</span>
                    </li>
                    <li><i class="im im-air"></i><span class="booking-item-feature-title">Air Conditioning</span>
                    </li>
                    <li><i class="im im-kitchen"></i><span class="booking-item-feature-title">Kitchen</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Suitability</h3>
                <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                    <li><i class="im im-wheel-chair"></i><span class="booking-item-feature-title">Wheelchair Access</span>
                    </li>
                    <li><i class="im im-elder"></i><span class="booking-item-feature-title">Elder Access</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Property description</h3>
                <p>The iHub offers a mix of creative work spaces and meeting rooms. Located on the top two floors of Senteu Plaza on the junction of Galana and Lenana road, the iHub is surrounded by lush greenness and great views of the Nairobi skyline, from our terrace on the 6th floor.
We have about 23,000 square feet of space, which when complete will include private offices, co-working space, meeting rooms... and an outdoor terrace. iHub members will be able to access all our facilities including 24/7 access and subsidized rates. </p>
                <p></p>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <h3 class="mb20">Property Reviews</h3>
        <div class="row row-wrap">
            <div class="col-md-8">
                
                <div class="row wrap">
                    <div class="col-md-5">
                        <p>There are no reviews on properties yet
                        </p>
                    </div>
               
                </div>
                <div class="gap gap-small"></div>
                <div class="box bg-gray">
                    <h3>Write a Review</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Review Title</label>
                                    <input class="form-control" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Review Text</label>
                                    <textarea class="form-control" rows="6"></textarea>
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
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Properties Near</h4>
                <ul class="booking-list">
                <li>
                        <div class="booking-item booking-item-small">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="{{ asset('img/hotel_porto_bay_serra_golf_living_room_800x600.jpg') }}" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                </div>
                                <div class="col-xs-5">
                                    <h5 class="booking-item-title">Africa's Talking, Galana Road</h5>
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
                                <div class="col-xs-3"><span class="booking-item-price">KES 450 / hour</span>
                                </div>
                            </div>
                        </div>
                    </li>
                            </ul>
        </div>
    </div>
    <div class="gap gap-small"></div>
</div>


@endsection