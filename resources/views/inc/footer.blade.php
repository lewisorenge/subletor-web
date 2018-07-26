<footer id="main-footer" style="display: none">
    <div class="container" id="footer">
        <div class="row row-wrap">
            <div class="col-md-3">
                <a class="logo" href="index-2.html">
                    <img src="{{ asset('img/logo/logo-invert.png') }}" alt="Image Alternative text" title="Image Title" />
                </a>
                <p class="mb20">Booking, reviews and advices on office spaces all over the country at affordable prices.</p>
                <ul class="list list-horizontal list-space">
                    <li>
                        <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="facebook.com/SubletorKe"></a>
                    </li>
                    <li>
                        <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="twitter.com/@subletor1"></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <h4>Newsletter</h4>
                {!! Form::open(['action' => 'MailingListController@store']) !!}
                    <label for="mailing_list_email">Enter your E-mail Address</label>
                    <input type="email" name="mailing_list_email" id="mailing_list_email" class="form-control">
                    @if ($errors->has('mailing_list_email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mailing_list_email') }}</strong>
                        </span>
                    @endif
                    <p class="mt5">
                        <small>*We Never Send Spam</small>
                    </p>
                    <input type="submit" class="btn btn-primary" value="Subscribe">
                {!! Form::close() !!}
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <h4>Have Questions?</h4>
                <p class="text-color">+254 791 418 641</p>
                <p><a href="mailto:support@subletor.com" class="text-color">support@subletor.com</a></p>
                <p>24/7 Dedicated Customer Support</p>
            </div>

        </div>
    </div>
</footer>
<div class="container-fluid" style="position:fixed-bottom">
    <button class="btn btn-primary pull-right" onclick="toggleFooter()">Terms &amp; Conditions</button>
</div>

<script>
    function toggleFooter() {
        var x = document.getElementById("main-footer");
        if(x.style.display == 'none') {
            x.style.display = 'block';
        } 
        else {
            x.style.display = 'none';
        }
    }
</script>