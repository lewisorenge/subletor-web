<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\PropertyImage;

class PagesController extends Controller
{
    public function home(){
        $properties = Property::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        $propertyImages = PropertyImage::all();

        return view('pages.home')
            ->with('propertyImages', $propertyImages)
            ->with('properties', $properties);
    }

    /*
    * View search results    
    */
    public function offices() {
        return view('pages.offices');
    }

    /*
    * View search results    
    */
    public function details() {
        return view('pages.details');
    }


    /*
    * View search results    
    */
    public function host() {
        return view('pages.how-to-host');
    }

    /**
     * @return how-it-works
     */
    public function works(){
        return view('pages.how-it-works');
    }


    public function help(){
        return view('pages.help');
    }
}
