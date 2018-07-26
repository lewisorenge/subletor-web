@extends('layouts.app')
@section('title')
    How it works
@endsection
@section('description') 
    Subletor is easy to use, one only needs to visit the site and follow the simple steps given.
@endsection

@section('keywords', 'how subletor works, what is subletor, subletor, office,offices, offics in nairobi, offices in nakuru,offices in mombasa, offices in kisumu, offices in eldoret, offices in kenya, affrodable offices in nairobi, affordable offices in kenya, office to let, where do i find an office, temporary offices in nairobi, cheap offices, shared offices in nairobi, shared offices in kenya, affordable boadrooms in kenya, affordablle boadrooms in nairobi')
@section('extra-css')
@endsection

@section('content')
<div class="container">
    <div class="gap gap-small"></div>
        <h3>How Subletor works</h3>    
        <hr>
        <div class="row row-wrap">
            
            <div class="col-md-1 "> 
                <div class="gap bg-gap"><div class="gap"></div></div>
                    <div class="gap"></div>
                    <span class="fa box-icon-orange box-icon-to-normal box-icon-left box-icon-big animate-icon-bounce">1</span>
            </div>
            <div class="col-md-5">
                <div class="gap bg-gap"><div class="gap"></div></div>
                <h3>Access the website.</h3> 
                <p>
                    Having visited <a href="https://subletor.com">subletor</a> you are at freedom to either post an office or view offices already posted.
                </p>
                <p>
                   However,the above mentioned features can only be accessed after you have created an account with subletor.          
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/illustration/www.subletor.svg" class="img-fluid">
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
                    <h3>Adding and Finding an office.</h3> 
                </p>
                If you have an office willing to sublet making you the sublessor, you can go to <a href="#sublet"> sublet</a> to begin the upload process as well as the verification process.
                <p>
                    
                </p>
                If you are looking for an office, making you the client, you can browse through the <a href="/home">home page</a> to view offices that might interst you. To make it easier we have integrated search by location to allow you as a client look for an office near you.
                <p><strong>You need to signup or signin if you already have an account to access these features.</strong></p>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <img src="img/illustration/uploadoffice.svg" class="img-fluid" alt="Adding an office">
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
                <h3>Payment procedure.</h3> 
                <p>
                    In order to be verified as a legitimate office owner, one has to pay the verification fee of <strong>KES 500</strong> through Mpesa till number. Once you recieve a client he will pay you not through our site but as you two will agree upon.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/illustration/payment.svg" class="img-fluid" alt="payment procedure">
            </div>
        </div>

        <hr>

        <div class="row row-wrap">
            <div class="col-md-1 col-md-push-11">
                    <span class="fa box-icon-orange box-icon-to-normal box-icon-left box-icon-big animate-icon-bounce">4</span>
            </div>
            <div class="col-md-5 col-md-push-6">
            <br><br><br><br><br><br><br>
                <h3>Security</h3>
                <p>
                    Subletor ensures security to both parties by insuring either of any damagees or misharps. This is so as to gain 
                    as much user trust as possible and become the leading online office seeking plartform.
                </p>
            </div>
            <div class="col-md-6 col-md-pull-5">
                <img src="img/illustration/security.svg" class="img-fluid" alt="security">
            </div>
        </div>
             <br>
             <hr>
             <div class="row row-wrap">
                 <div class="col-md-1">
                 <div class="gap bg-gap"><div class="gap"></div></div>
                     <span class="fa box-icon-orange box-icon-to-normal box-icon-left box-icon-big animate-icon-bounce">5</span>
                 </div>
                 <div class="col-md-5">
                 <div class="gap bg-gap"><div class="gap"></div></div>
                     <p>
                         <h3>User reveiws and ratings</h3>
                     </p>
                     After a client visits an office he gets the ability to review the listing and rate their working experience. However, the sublessor on the other hand also has the ability to rate a certain user's code of conduct while in the work space so as to help us with security.
                 </div>
                 <div class="col-md-6">
                    <img src="img/illustration/user-reviews.svg" class="img-fluid" alt="user reviews" >
                 </div>
             </div>
</div>
@endsection