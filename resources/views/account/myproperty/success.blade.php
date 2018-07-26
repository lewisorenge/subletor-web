@extends ('layouts.app')

@section('content')
<div class="gap"></div>
 <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>	
                    <h2 class="text-center">John, your payment was successful!</h2>
                    <h5 class="text-center mb30">Rental details and Payment receipts were sent to your email</h5>
                    <ul class="order-payment-list list mb30">
                        <li>
                            <div class="row">
                                <div class="col-xs-9">
                                    <h5><i class="fa fa-home"></i>Office space in iHub Kenya</h5>
                                    <p><small>June 14, 2018</small>
                                    </p>
                                </div>
                                <div class="col-xs-3">
                                    <p class="text-right"><span class="text-lg">KES 3,200</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-9">
                                    <h5><i class="fa fa-home"></i> Your check out date is</h5>
                                    <p><small>June 15, 2018</small>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gap"></div>
        </div>


@endsection