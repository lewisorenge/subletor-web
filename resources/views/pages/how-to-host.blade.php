@extends('layouts.app')

@section('title')
    How to host
@endsection
@section('description') 
    Upload your office to subletor and be able to earn money out of the extra space, subletor revolutionizes office hustles into an exciting experience.
@endsection

@section('keywords', 'subletor, sublet, how to upload an office, how to find an office, office, airbnb for offices, offices in nairobi, offices in nakuru,offices in mombasa, offices in kisumu, offices in eldoret, offices in kenya, affrodable offices in nairobi, affordable offices in kenya, office to let, where do i find an office, temporary offices in nairobi, cheap offices, shared offices in nairobi, shared offices in kenya, affordable boadrooms in kenya, affordablle boadrooms in nairobi')

@section('content')



    <!-- TOP AREA -->
    <div class="top-area show-onload">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-parallax" style="background-image:url(img/illustration/cartoon-office.svg);"></div>
            <div class="bg-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="search-tabs search-tabs-bg mt50">
                                <div class="tabbable">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" >
                                            <h2>Earn money as a Sub-lessor</h2>
                                            <p>Earn money from subleasing your extra office space by becoming a host, you get to explore new experiences,embrace office coworking and learn other people's culture.
                                            Its pretty simple just click the host button. </p>
                                            
                                            <hr>
                                            <a class="btn btn-primary btn-lg" href="users/property/create">Become a host</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP AREA  -->

 <div class="row row-wrap">
            
            <div class="col-md-1 "> 
                <div class="gap bg-gap"><div class="gap"></div></div>
                    <div class="gap"></div>
                    <span class="fa box-icon-orange box-icon-to-normal box-icon-left box-icon-big animate-icon-bounce">1</span>
            </div>
            <div class="col-md-5">
                <div class="gap bg-gap"><div class="gap"></div></div>
                <h3>Create your listing.</h3> 
                <p>
                It’s free and easy to create a listing on Subletor. Describe your space, how many guests you can accommodate, and add photos and details.
                </p>
                <p>
                Our pricing tool can recommend competitive rates, but what you charge is always up to you.        
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/host1.jpg" class="img-fluid">
            </div>
        </div>

        <hr>

        <div class="row row-wrap">
            <div class="col-md-1 col-md-push-11">
            <div class="gap bg-gap"><div class="gap"><div class="gap"><div class="gap"><br></div></div></div></div>
                    <span class="fa box-icon-orange box-icon-to-normal box-icon-left box-icon-big animate-icon-bounce">2</span>
            </div>
            <div class="col-md-5 col-md-push-5">
            <div class="gap bg-gap"><div class="gap"></div></div>
                <p>
                    <h3>Welcome guests.</h3> 
                </p>
                Get to know guests before arrival by messaging them on our platform. 
                </p>
                <p>Most hosts clean the spaces guests can use, and ensure the amenities are serviced awaiting immediate use by the guests</p>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <img src="img/host2.jpg" class="img-fluid" alt="Adding an office">
            </div>
        </div>

        <hr>

        <div class="row row-wrap">
            <div class="col-md-1">
            <div class="gap bg-gap"><div class="gap"><br><br><br><br><br></div></div>
                <span class="fa box-icon-orange box-icon-to-normal box-icon-left box-icon-big animate-icon-bounce">3</span>
            </div>
            <div class="col-md-5 ">
            <div class="gap bg-gap"><div class="gap"><br><br><br></div></div>
                <h3>Get Paid</h3> 
                <p>
                Subletor’s secure payment system means you never have to deal with money directly.
                You can be paid via PayPal, direct deposit, or international money wire, among other ways.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/host3.jpg" class="img-fluid" alt="payment procedure">
            </div>
        </div>

        </div>



    <div class="gap"></div>
@endsection