@extends('layouts.app')

@section('title')
    Office details
@endsection
@section('content')


<div class="container">
    <ul class="breadcrumb">
        <li><a href="index-2.html">Home</a>
        </li>
        <li><a href="#">United States</a>
        </li>
        <li><a href="#">New York (NY)</a>
        </li>
        <li><a href="#">New York City</a>
        </li>
        <li><a href="#">New York City Hotels</a>
        </li>
        <li class="active">Duplex Greenwich</li>
    </ul>
    <div class="booking-item-details">
        <header class="booking-item-header">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="lh1em">Midtown Manhattan Oversized</h2>
                    <p class="lh1em text-small"><i class="fa fa-map-marker"></i> 6782 Sarasea Circle, Siesta Key, FL 34242</p>
                    <ul class="list list-inline text-small">
                        <li><a href="#"><i class="fa fa-envelope"></i> Agent E-mail</a>
                        </li>
                        <li><a href="#"><i class="fa fa-home"></i> Agent Website</a>
                        </li>
                        <li><i class="fa fa-phone"></i> +1 (115) 430-5004</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="booking-item-header-price"><span class="text-lg">$250</span>/night</p>
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
                                <img src="img/hotel_porto_bay_serra_golf_library_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                <img src="img/hotel_porto_bay_liberdade_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY LIBERDADE" />
                                <img src="img/hotel_porto_bay_serra_golf_suite_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite" />
                                <img src="img/hotel_eden_mar_suite_800x600.jpg" alt="Image Alternative text" title="hotel EDEN MAR suite" />
                                <img src="img/hotel_porto_bay_serra_golf_living_room_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF living room" />
                                <img src="img/hotel_2_800x600.jpg" alt="Image Alternative text" title="hotel 2" />
                                <img src="img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                <img src="img/lhotel_porto_bay_sao_paulo_lobby_800x600.jpg" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO lobby" />
                                <img src="img/hotel_porto_bay_serra_golf_suite2_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                <img src="img/hotel_the_cliff_bay_spa_suite_800x600.jpg" alt="Image Alternative text" title="hotel THE CLIFF BAY spa suite" />
                                <img src="img/lhotel_porto_bay_sao_paulo_luxury_suite_800x600.jpg" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO luxury suite" />
                                <img src="img/lhotel_porto_bay_sao_paulo_suite_lhotel_living_room_800x600.jpg" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO suite lhotel living room" />
                                <img src="img/the_pool_800x600.jpg" alt="Image Alternative text" title="The pool" />
                                <img src="img/hotel_1_800x600.jpg" alt="Image Alternative text" title="hotel 1" />
                                <img src="img/hotel_porto_bay_rio_internacional_de_luxe_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="google-map-tab">
                            <div id="map-canvas" style="width:100%; height:500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="booking-item-meta">
                    <h2 class="lh1em mt40">Exeptional!</h2>
                    <h3>97% <small >of guests recommend</small></h3>
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
                        <p><a class="text-default" href="#">based on 1535 reviews</a>
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
                                        <label>Check in</label>
                                        <input class="form-control" name="end" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group- form-group-select-plus">
                                    <label>Adults</label>
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
                                <div class="form-group form-group-select-plus">
                                    <label>Children</label>
                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" />0</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />1</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />2</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3+</label>
                                    </div>
                                    <select class="form-control hidden">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option selected="selected">4</option>
                                        <option>5</option>
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
                    </form>
                </div>
                <div class="gap gap-small"></div>	<a href="#" class="btn btn-primary btn-lg">Book Now</a>
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
                    <li><i class="im im-pool"></i><span class="booking-item-feature-title">Pool</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Suitability</h3>
                <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                    <li><i class="im im-wheel-chair"></i><span class="booking-item-feature-title">Wheelchair Access</span>
                    </li>
                    <li><i class="im im-smoking"></i><span class="booking-item-feature-title">Smoking Allowed</span>
                    </li>
                    <li><i class="im im-children"></i><span class="booking-item-feature-title">For Children</span>
                    </li>
                    <li><i class="im im-elder"></i><span class="booking-item-feature-title">Elder Access</span>
                    </li>
                    <li><i class="im im-dog"></i><span class="booking-item-feature-title">Pet Allowed</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Property description</h3>
                <p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p>
                <p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <h3 class="mb20">Property Reviews</h3>
        <div class="row row-wrap">
            <div class="col-md-8">
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
                    <li>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booking-item-review-person">
                                    <a class="booking-item-review-person-avatar round" href="#">
                                        <img src="img/me_with_the_uke_70x70.jpg" alt="Image Alternative text" title="Me with the Uke" />
                                    </a>
                                    <p class="booking-item-review-person-name"><a href="#">Minnie Aviles</a>
                                    </p>
                                    <p class="booking-item-review-person-loc">Palm Beach, FL</p><small><a href="#">64 Reviews</a></small>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="booking-item-review-content">
                                    <h5>"Varius massa maecenas et id dictumst mattis"</h5>
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
                                    <p>Donec fringilla ac parturient posuere id phasellus erat elementum nullam lacus cursus rhoncus parturient vitae praesent quisque nascetur molestie quis dignissim vel sit odio metus tristique auctor dictumst primis ad viverra quisque etiam in rutrum donec cras non<span class="booking-item-review-more"> Dis suscipit risus ridiculus lacus mus cursus luctus donec pellentesque rhoncus sem quam vulputate mus hendrerit risus ultrices a elementum massa est at aenean parturient in egestas senectus lectus convallis lectus dui neque sit dignissim facilisis fames feugiat laoreet pharetra felis vitae ornare lacus sodales non sapien curae nisl nec habitant velit semper pretium et ipsum dolor in amet nunc vestibulum lacus nulla dis sollicitudin diam luctus dolor ante</span>
                                    </p>
                                    <div class="booking-item-review-more-content">
                                        <p>Lobortis neque enim facilisis penatibus integer lacinia semper nibh ullamcorper feugiat faucibus non nec amet ac</p>
                                        <p>Mus hac diam nulla ridiculus proin sem iaculis condimentum pharetra morbi volutpat torquent orci luctus pharetra volutpat nisl dis curae primis aliquet sapien pellentesque velit tristique taciti tincidunt adipiscing pharetra massa at quisque fermentum faucibus ultrices mi fames himenaeos pellentesque curabitur nisl etiam a volutpat phasellus convallis diam tempus malesuada mauris torquent dapibus montes mollis iaculis porta ridiculus rutrum fusce sed parturient habitant a gravida</p>
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
                                        <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a><b class="text-color"> 16</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booking-item-review-person">
                                    <a class="booking-item-review-person-avatar round" href="#">
                                        <img src="img/good_job_70x70.jpg" alt="Image Alternative text" title="Good job" />
                                    </a>
                                    <p class="booking-item-review-person-name"><a href="#">Cyndy Naquin</a>
                                    </p>
                                    <p class="booking-item-review-person-loc">Palm Beach, FL</p><small><a href="#">80 Reviews</a></small>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="booking-item-review-content">
                                    <h5>"Curabitur senectus blandit parturient quam fames sem"</h5>
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
                                    <p>Nec interdum id torquent litora nibh curae morbi cum etiam duis malesuada viverra ultricies pellentesque vestibulum sed mattis augue penatibus venenatis malesuada nam semper facilisis taciti posuere convallis curae auctor non sodales iaculis blandit taciti pellentesque faucibus id<span class="booking-item-review-more"> Nam scelerisque sapien ultricies euismod viverra diam dictum curabitur laoreet facilisi conubia purus taciti malesuada eget cum malesuada nunc libero vestibulum aptent aliquam eros facilisi purus mus odio praesent facilisi molestie</span>
                                    </p>
                                    <div class="booking-item-review-more-content">
                                        <p>Amet fringilla ultricies sem leo pulvinar gravida pulvinar felis adipiscing risus curae nulla rutrum vehicula interdum sit consectetur arcu fusce turpis nisl sollicitudin euismod fringilla habitant mi condimentum at vehicula sem conubia neque maecenas ultrices donec sodales nam nec phasellus</p>
                                        <p>Fermentum et vulputate in viverra dolor tortor platea fames libero malesuada justo elit nostra metus ullamcorper etiam rutrum dictum aenean himenaeos morbi dolor commodo vulputate accumsan sapien vitae consectetur quisque placerat vulputate dolor torquent blandit ac eget vulputate pretium habitant</p>
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
                                        <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a><b class="text-color"> 8</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booking-item-review-person">
                                    <a class="booking-item-review-person-avatar round" href="#">
                                        <img src="img/chiara_70x70.jpg" alt="Image Alternative text" title="Chiara" />
                                    </a>
                                    <p class="booking-item-review-person-name"><a href="#">Carol Blevins</a>
                                    </p>
                                    <p class="booking-item-review-person-loc">Palm Beach, FL</p><small><a href="#">71 Reviews</a></small>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="booking-item-review-content">
                                    <h5>"Parturient cursus sem"</h5>
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
                                    <p>Tempor ligula a at ultrices commodo nibh potenti feugiat morbi molestie litora leo eu ullamcorper montes consectetur eros fringilla per placerat velit<span class="booking-item-review-more"> Tincidunt aptent vulputate gravida curae lacinia imperdiet tempus erat vulputate posuere mollis quisque magna facilisi sagittis ridiculus consequat a nisl tincidunt nisl dapibus leo dignissim dapibus odio eu eu mi quam nibh erat tortor habitasse fringilla porttitor a sapien vivamus praesent arcu turpis malesuada tortor rutrum ante hac fringilla inceptos ante molestie nostra nulla est maecenas sodales per mi dictum nisl eros dignissim commodo a</span>
                                    </p>
                                    <div class="booking-item-review-more-content">
                                        <p>Nostra class dolor nulla ligula nec velit nam vulputate magna fringilla interdum velit diam sed eros mus luctus fusce praesent mattis</p>
                                        <p>Proin inceptos tellus aliquet scelerisque velit fames tellus ac luctus consequat donec donec varius ullamcorper rutrum pulvinar sed ridiculus sed leo amet facilisi a phasellus conubia natoque neque etiam ad dis et neque dictumst est euismod lectus nisl iaculis habitasse dis pulvinar nostra pharetra platea mus nec viverra et molestie hac magnis risus nunc mus ultrices mus fermentum erat magna libero nascetur aptent ullamcorper sed sollicitudin amet ipsum litora</p>
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
                                                            <li><i class="fa fa-smile-o text-gray"></i>
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
                                        <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a><b class="text-color"> 18</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booking-item-review-person">
                                    <a class="booking-item-review-person-avatar round" href="#">
                                        <img src="img/gamer_chick_70x70.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                    </a>
                                    <p class="booking-item-review-person-name"><a href="#">Cheryl Gustin</a>
                                    </p>
                                    <p class="booking-item-review-person-loc">Palm Beach, FL</p><small><a href="#">74 Reviews</a></small>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="booking-item-review-content">
                                    <h5>"Conubia sit potenti quisque tellus maecenas ad"</h5>
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
                                    <p>Mus ante nulla arcu dictum convallis feugiat aptent maecenas blandit dignissim praesent sem imperdiet faucibus est a vulputate eu lacus integer imperdiet dis ipsum suscipit metus ornare varius porttitor tempor primis elementum sapien ipsum aliquet accumsan litora non penatibus<span class="booking-item-review-more"> Magna nascetur lacinia dolor imperdiet lectus fringilla purus ultricies ultricies facilisis tincidunt semper himenaeos scelerisque pretium euismod nulla sapien sollicitudin ante ad quis habitant fringilla integer pellentesque sociis sodales conubia velit iaculis</span>
                                    </p>
                                    <div class="booking-item-review-more-content">
                                        <p>Sed adipiscing odio netus ut lectus curabitur morbi ligula egestas luctus taciti bibendum praesent blandit nullam aliquet rhoncus varius justo</p>
                                        <p>Aliquam posuere mauris habitant facilisis in ridiculus vulputate montes curae dictumst lobortis volutpat suscipit praesent habitant habitasse senectus sollicitudin proin suspendisse tristique molestie egestas egestas lectus enim tristique pellentesque eu venenatis himenaeos torquent ridiculus</p>
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
                                                            <li><i class="fa fa-smile-o text-gray"></i>
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
                                        <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a><b class="text-color"> 14</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booking-item-review-person">
                                    <a class="booking-item-review-person-avatar round" href="#">
                                        <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                    <p class="booking-item-review-person-name"><a href="#">Joe Smith</a>
                                    </p>
                                    <p class="booking-item-review-person-loc">Palm Beach, FL</p><small><a href="#">117 Reviews</a></small>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="booking-item-review-content">
                                    <h5>"Cum praesent cubilia quis"</h5>
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
                                    <p>Quisque mollis consequat nascetur eu urna ante arcu phasellus maecenas parturient natoque ipsum facilisi cubilia vel litora vel eleifend mollis euismod mus curae dictum taciti platea nullam dui parturient<span class="booking-item-review-more"> Litora suspendisse magna nunc ligula natoque habitasse eros rhoncus viverra orci mattis vulputate senectus porttitor suspendisse egestas facilisi iaculis est aptent conubia accumsan dolor nec molestie leo odio in eleifend aenean aliquam neque libero nisl himenaeos purus tortor mattis congue viverra scelerisque nisi egestas tempus tellus dolor dictum molestie feugiat diam vehicula molestie torquent suscipit volutpat vivamus rutrum blandit eu litora praesent duis facilisi augue ultrices class viverra ipsum</span>
                                    </p>
                                    <div class="booking-item-review-more-content">
                                        <p>Condimentum amet sociosqu natoque maecenas urna sem cubilia sagittis bibendum iaculis dui eget habitant malesuada imperdiet molestie augue parturient quis turpis congue sed ullamcorper augue rutrum lacinia vehicula eros</p>
                                        <p>Vel luctus ligula dictum vel laoreet molestie amet nunc est risus neque fringilla lectus et accumsan tortor ultricies nulla amet pharetra dignissim turpis tristique malesuada dolor proin faucibus pretium lacus</p>
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
                                                            <li><i class="fa fa-smile-o text-gray"></i>
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
                                        <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a><b class="text-color"> 11</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booking-item-review-person">
                                    <a class="booking-item-review-person-avatar round" href="#">
                                        <img src="img/bubbles_70x70.jpg" alt="Image Alternative text" title="Bubbles" />
                                    </a>
                                    <p class="booking-item-review-person-name"><a href="#">Ava McDonald</a>
                                    </p>
                                    <p class="booking-item-review-person-loc">Palm Beach, FL</p><small><a href="#">116 Reviews</a></small>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="booking-item-review-content">
                                    <h5>"Dignissim luctus dignissim sodales tempor"</h5>
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
                                    <p>Convallis elementum ullamcorper tempor maecenas potenti nisl sagittis erat venenatis imperdiet posuere per sit eget egestas laoreet ornare nisl laoreet risus et lorem urna justo amet faucibus sem natoque sed blandit penatibus velit tortor eros netus sapien dapibus<span class="booking-item-review-more"> Semper diam scelerisque venenatis donec mattis dis conubia interdum dolor porttitor vulputate torquent fusce mi ipsum nulla massa integer proin auctor sed mollis sagittis dolor sociis pellentesque urna magna pharetra vivamus a tortor ut egestas gravida tristique porta nisl scelerisque litora mus sociosqu potenti aptent non curabitur ut orci libero eros scelerisque porttitor diam id curabitur dignissim iaculis elementum gravida netus cubilia amet donec suspendisse auctor</span>
                                    </p>
                                    <div class="booking-item-review-more-content">
                                        <p>Mauris class lobortis enim tempus sollicitudin in euismod suscipit sem class eros parturient sit montes risus vulputate elementum donec ultricies commodo torquent arcu facilisi platea conubia nascetur vivamus vivamus sagittis porta neque platea egestas ullamcorper dictumst aliquet et dis in purus eu ac euismod aenean class felis lorem nisl aptent</p>
                                        <p>Netus amet platea a scelerisque neque ad eu ipsum dignissim sagittis purus integer lobortis proin primis eleifend magnis at auctor tempor tellus massa convallis sapien platea et pulvinar venenatis morbi blandit elit sollicitudin mollis cursus magna justo enim duis senectus cubilia rutrum luctus augue volutpat pretium pellentesque nisl lacus diam vitae enim lacus pretium cum habitasse ligula lobortis inceptos quis maecenas vulputate leo sem</p>
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
                                                            <li><i class="fa fa-smile-o text-gray"></i>
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
                                        <a class="fa fa-thumbs-o-up box-icon-inline round" href="#"></a><b class="text-color"> 6</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="row wrap">
                    <div class="col-md-5">
                        <p><small>1197 reviews on this property. &nbsp;&nbsp;Showing 1 to 7</small>
                        </p>
                    </div>
                    <div class="col-md-7">
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
                                    <img src="img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                </div>
                                <div class="col-xs-5">
                                    <h5 class="booking-item-title">Styish, Chic, Best of West Village</h5>
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
                                </div>
                                <div class="col-xs-3"><span class="booking-item-price">$159</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="booking-item booking-item-small">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/hotel_porto_bay_serra_golf_suite2_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                </div>
                                <div class="col-xs-5">
                                    <h5 class="booking-item-title">Luxury Studio in Manhattan NYC</h5>
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
                                    </ul>
                                </div>
                                <div class="col-xs-3"><span class="booking-item-price">$237</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="booking-item booking-item-small">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/hotel_eden_mar_suite_800x600.jpg" alt="Image Alternative text" title="hotel EDEN MAR suite" />
                                </div>
                                <div class="col-xs-5">
                                    <h5 class="booking-item-title">Luxury Apartment Theatre District</h5>
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
                                <div class="col-xs-3"><span class="booking-item-price">$414</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="booking-item booking-item-small">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/hotel_porto_bay_rio_internacional_de_luxe_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                </div>
                                <div class="col-xs-5">
                                    <h5 class="booking-item-title">Manhattan Beautiful Loft Excellent Loc</h5>
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
                                <div class="col-xs-3"><span class="booking-item-price">$183</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="booking-item booking-item-small">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/the_pool_800x600.jpg" alt="Image Alternative text" title="The pool" />
                                </div>
                                <div class="col-xs-5">
                                    <h5 class="booking-item-title">The Meatpacking Suites - Luxury Lofts, Hot Location</h5>
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
                                <div class="col-xs-3"><span class="booking-item-price">$476</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
</div>

@endsection