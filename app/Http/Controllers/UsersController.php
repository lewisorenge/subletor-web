<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PhoneNumber;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find(auth()->user()->id);

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $phoneNumbers = PhoneNumber::where('user_id', $id)->get();

        // Check if its correct user
        if(auth()->user()->id !== $user->id) {
            return redirect('/')->with('danger', 'Ooops! Seems you are not authorised to access this page. If you think this is wrong, kindly contact support.');
        }

        return view('users.edit')
            ->with('phoneNumbers', $phoneNumbers)
            ->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'sometimes|required|date',
            'email' => 'required|email',
            'phoneNumber' => 'sometimes|between:9,13',
            'about' => 'sometimes'
        ]);
        // Make phoneNumber international format
        $receivedPhone = $request->input('phoneNumber');
        $realPhoneNumber = substr($receivedPhone, -9);
        $phoneNumber = '+254'.$realPhoneNumber;

        $user = User::find((int)$id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->phoneNumber = $phoneNumber;
        $user->about = $request->input('about');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        return redirect('users/'.$user->id.'/edit')
            ->with('user', $user)
            ->with('success', 'Your account information has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
