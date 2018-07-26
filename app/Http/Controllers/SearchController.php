<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\Amenity;
use App\Category;
use DB;

class SearchController extends Controller
{
    public function search(Request $request){
        $amenities = Amenity::all();
        $categories = Category::all();

        // Get values from form
        $cat_id = $request->category ?  $request->category : null;
        $town = $request->input('town');
        $amenities_id = $request->amenites;

        $properties = Property::where('category_id', $cat_id)
            ->where('town', $town)
            ->get();

        return view('pages.search-results')
            ->with('properties', $properties)
            ->with('request',$request)
            ->with('amenities', $amenities)
            ->with('categories', $categories)
            ->with('cat_id', $cat_id);

    }
}
