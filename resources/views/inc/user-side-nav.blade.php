<aside class="user-profile-sidebar">
    <div class="user-profile-avatar text-center">
        <img src="{{ asset('img/icons/female-user.svg') }}" alt="Image Alternative text" title="{{ auth()->user()->first_name }}" />
        <h5>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
        <p>Member Since {{ \Carbon\Carbon::parse(auth()->user()->created_at)->format('M Y') }}</p>
    </div>
    <ul class="list user-profile-nav">
        <li>
            <a href="{{ url('/users/property') }}">
                <i class="fa fa-user"></i>
                My Listings
            </a>
        </li>
        <li>
            <a href="{{ url('/users/property-reviews') }}">
                <i class="fa fa-user"></i>
                Reviews
            </a>
        </li>
        <li>
            <a href="{{ url('/users/'.auth()->user()->id.'/edit') }}">
                <i class="fa fa-cog"></i>
                My Account
            </a>
        </li>
    </ul>
</aside>
