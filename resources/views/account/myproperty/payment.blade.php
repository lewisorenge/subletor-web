@extends ('layouts.app')

@section('content')
<div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
   
<div class="container">
            <div class="row row-wrap">
                <div class="col-md-4">
                    <img class="pp-img" src="{{ asset('img/paypal.png') }}" alt="Image Alternative text" title="Image Title" />
                    <p>Important: You will be redirected to Visa's website to securely complete your payment.</p><a class="btn btn-primary">Checkout via Visa</a>	
                </div>

                <div class="col-md-4">
                    <h4>Pay via Credit/Debit Card</h4>
                    <form class="cc-form">
                        <div class="clearfix">
                            <div class="form-group form-group-cc-number">
                                <label>Card Number</label>
                                <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text" /><span class="cc-card-icon"></span>
                            </div>
                            <div class="form-group form-group-cc-cvc">
                                <label>CVC</label>
                                <input class="form-control" placeholder="xxxx" type="text" />
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="form-group form-group-cc-name">
                                <label>Cardholder Name</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group form-group-cc-date">
                                <label>Valid Thru</label>
                                <input class="form-control" placeholder="mm/yy" type="text" />
                            </div>
                        </div>
                        <a href="{{ url('/account/signin') }}" class="btn btn-primary">Proceed to payment</a>
                    </form>
                </div>

                <div class="col-md-4">
                    <div class="booking-item-payment">
                        <header class="clearfix">
                            <a class="booking-item-payment-img" href="#">
                            <img src="{{ asset('img/hotel_porto_bay_liberdade_2048x1293.jpg') }}" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                            </a>
                            <h5 class="booking-item-payment-title"><a href="{{ url('/account/myproperty/show') }}">iHub Kenya</a></h5>
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
                        </header>
                        <ul class="booking-item-payment-details">
                            <li>
                                <h5>Booking for 2 days</h5>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">June ,14</p>
                                    <p class="booking-item-payment-date-weekday">Thursday</p>
                                </div><i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">June, 15</p>
                                    <p class="booking-item-payment-date-weekday">Friday</p>
                                </div>
                            </li>
                            <li>
                                <h5>Property (1 Guest)</h5>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p class="booking-item-payment-price-title">2 days</p>
                                        <p class="booking-item-payment-price-amount">KES 1,600<small>/per day</small>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class="booking-item-payment-total">Total rent: <span>KES 3,200</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="gap"></div> <div class="gap"></div>
            <div class="gap"></div>
        </div>

@endsection