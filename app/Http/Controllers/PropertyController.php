<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Amenity;
use App\Property;
use App\PropertyImage;
use App\PropertyAmenity;
use App\PropertyReviews;
use App\Booking;

use DateTime;

class propertyController extends Controller
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
        $current_user = auth()->user()->id;
        $properties = Property::where('user_id', $current_user)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('property.index')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $amenities = Amenity::all();
        return view('property.create')
            ->with('categories', $categories)
            ->with('amenities', $amenities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'town' => 'required|string',
            'street_address' => 'required',
            'building' => 'required',
            'floor' => 'required',
            'room_number' => 'required',
            'accomodates_count' => 'required',
            'opening_hours' => 'required',
            'closing_hours' => 'required',
            // property name and Description
            'name' => 'required',
            'description' => 'required',
            // Pricing
            'price' => 'required|integer',
            'price_duration'=> 'required',
            'minimum_stay' => 'required',
            // 'property_image' => 'required|image|mimes:jpeg, png, jpg',
        ]);

        // Initialize class
        $property = new Property;
        $property->name = $request->input('name');
        $property->description = $request->input('description');
        $property->user_id = auth()->user()->id;
        $property->category_id = $request->input('category_id');
        $property->latitude = NULL;
        $property->longitude = NULL;
        $property->town = $request->input('town');
        $property->street_address = $request->input('street_address');
        $property->building = $request->input('building');
        $property->floor = $request->input('floor');
        $property->room_number = $request->input('room_number');
        $property->accomodates_count = $request->input('accomodates_count');
        $property->opening_hours = (DateTime::createFromFormat('H:i A', $request->input('opening_hours')))->format('H:i:s');
        $property->closing_hours = (DateTime::createFromFormat('H:i A', $request->input('closing_hours')))->format('H:i:s');
        if($request->input('closed_days') != ''){
            $property->closed_days = implode(',', $request->input('closed_days'));
        }
        
        $property->rules = $request->input('rules');
        $property->price = $request->input('price');
        $property->price_duration = $request->input('price_duration');
        $property->minimum_stay = $request->input('minimum_stay');
        $property->guests_allowed = $request->input('guests_allowed');
        $property->start_date = (DateTime::createFromFormat('l d F Y' , $request->input('start_date'))->format('Y:m:d'));
        $property->mpesa_code = "LAUNCH00001"; ///Launch peope are given a promotion

        $property->save();

        // Save amenities to database one at a time
        $amenities = $request->input('amenity_id'); // Comes as an array
        if($amenities != ''){
            foreach($amenities as $amenity) {
                $query = DB::insert('INSERT INTO sb_property_amenity(property_id, amenity_id, created_at, updated_at) 
                    VALUES (?, ?, ?, ?)', [$property->id, $amenity, \Carbon\Carbon::now(), \Carbon\Carbon::now()]);
            }
        }

        // Images upload
        $images = $request->file('property_image');
        $destinationPath = public_path('storage/offices');
        foreach($images as $image) {
            $image_new_name = time().$image->getClientOriginalName();

            // Save to database
            $query = DB::insert('INSERT INTO sb_property_image(property_id, image_name, created_at, updated_at)
                    VALUES (?, ?, ?, ?)' , [$property->id, $image_new_name, \Carbon\Carbon::now(), \Carbon\Carbon::now()]);
            $image->move($destinationPath, $image_new_name);
        }
        return redirect('/users/property')->with('success', 'Your property has successfully been uploaded. Potential clients can now see them. Hope you will get one soon :) ~Subletor Team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // All available amenities
        $amenities = Amenity::all();
        $property = Property::find($id);
        $propertyImages = PropertyImage::where('property_id', $id)->get();

        $recentListings = Property::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        $propertyAmenities = PropertyAmenity::where('property_id', $id)
            ->get();
        $propertyReviews = PropertyReviews::where('property_id', $id)
            ->get();

        // Check if user should leave a reivew
        $current_user = auth()->user()->id;
        $leave_booking_review = Booking::where('user_id', $current_user)
            ->where('property_id', $id)->get();

        return view('property.show')
            ->with('amenities', $amenities)
            ->with('property', $property)
            ->with('recentListings', $recentListings)
            ->with('propertyAmenities', $propertyAmenities)
            ->with('propertyImages', $propertyImages)
            ->with('propertyReviews', $propertyReviews)
            ->with('leave_booking_review', $leave_booking_review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
