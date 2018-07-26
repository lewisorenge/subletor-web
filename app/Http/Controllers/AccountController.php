<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.dash');
    }

    /**
     * Display a edtit account.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('account.profile.edit');
    }


    /**
     * Display Booking History account.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookinghistory() {
        return view('account.profile.bookinghistory');
    }

}
