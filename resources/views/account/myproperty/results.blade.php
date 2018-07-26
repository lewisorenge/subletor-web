@extends ('layouts.app')

@section('content')

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Home</a>
                </li>
                <li><a href="#">Kenya</a>
                </li>
                <li><a href="#">Nairobi</a>
                </li>
                <li><a href="#">Nairobi County</a>
                </li>
                <li class="active">Office spaces in Nairobi</li>
            </ul>
            <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                <h3>Search for Office spaces</h3>
                <form>
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                        <label>Where are you going?</label>
                        <input class="typeahead form-control" placeholder="City, Airport, Point of Interest, Hotel Name or U.S. Zip Code" type="text" />
                    </div>
                    <div class="input-daterange" data-date-format="M d, D">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-in</label>
                                    <input class="form-control" name="start" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-out</label>
                                    <input class="form-control" name="end" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-select-plus">
                                    <label>Rooms</label>
                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" />1</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />2</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3+</label>
                                    </div>
                                    <select class="form-control hidden">
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
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-select-plus">
                                    <label>Gutests</label>
                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />1</label>
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" />2</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3</label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" />3+</label>
                                    </div>
                                    <select class="form-control hidden">
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
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                </form>
            </div>
            <h3 class="booking-title">2 Results for office spaces in Nairobi Kenya</h3>
            <div class="row">
                <div class="col-md-3">
                    <form class="booking-item-dates-change mb30">
                        <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                            <label>Where</label>
                            <input class="typeahead form-control" value="Nairobi Kenya" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                        </div>
                        <div class="input-daterange">
                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                <label>Check in</label>
                                <input class="form-control" name="start" type="text" />
                            </div>
                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                <label>Check out</label>
                                <input class="form-control" name="end" type="text" />
                            </div>
                        </div>
                        <div class="form-group form-group- form-group-select-plus">
                            <label>Guests</label>
                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options" />1</label>
                                <label class="btn btn-primary">
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
                        <div class="form-group form-group-select-plus">
                            <label>Rooms</label>
                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options" />1</label>
                                <label class="btn btn-primary">
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
                        <input class="btn btn-primary" type="submit" value="Update Search" />
                    </form>
                    <aside class="booking-filters text-white">
                        <h3>Filter By:</h3>
                        <ul class="list booking-filters-list">
                            <li>
                                <h5 class="booking-filters-title">Price</h5>
                                <input type="text" id="price-slider">
                            </li>
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
                            <li>
                                <h5 class="booking-filters-title">Bedrooms</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />1 Bedroom (100)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />2 Bedrooms (112)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />2+ Bedrooms (75)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Suitability</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Wheelchair Access (65)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Elder Access (215)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Suitable for Children (295)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Pet Friendly (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Smoking Allowed (35)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Amenities</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Air Conditioning (300)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Wi-Fi (320)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Internet (257)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />High Definition TV (185)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Washer/Dryer (156)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Other Outdoor Space (86)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Grill (61)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Parking (33)</label>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Sort: Price (low to high)<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Price (hight to low)</a>
                            </li>
                            <li><a href="#">Ranking</a>
                            </li>
                            <li><a href="#">Bedrooms (Most to Least)</a>
                            </li>
                            <li><a href="#">Bedrooms (Least to Most)</a>
                            </li>
                            <li><a href="#">Number of Reviews</a>
                            </li>
                            <li><a href="#">Number of Photos</a>
                            </li>
                            <li><a href="#">Just Added</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="booking-list">
                        <li>
                            <a class="booking-item" href="{{ url('/account/myproperty/show') }}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="{{ asset('img/hotel_porto_bay_liberdade_800x600.jpg') }}" alt="Image Alternative text" title="iHub Nairobi" />
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>3</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b >4.7</b> of 5</span><small>(0 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title">iHub Kenya</h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"></i>Nairobi, Hurligham (Galana Road)</p>
                                        <p> </p>
                                        
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price">$ 16</span><span>/day</span><span class="btn btn-primary">Book Now</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="booking-item" href="#">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="{{ asset('img/hotel_porto_bay_serra_golf_living_room_800x600.jpg') }}" alt="Image Alternative text" title="Africa's Talking" />
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>1</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                                <li><i class="fa fa-star-half-empty"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b >4.5</b> of 5</span><small>(100 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title">Africa's Talking</h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"></i> Nairobi, Hurligham (Galana road)</p>
                                        <p></p>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price">$15</span><span>/day</span><span class="btn btn-primary">Book Now</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-6">
                            <p><small>2 Office spaces found in Nairobi &nbsp;&nbsp;Showing 1 of 1</small>
                            </p>
                            
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