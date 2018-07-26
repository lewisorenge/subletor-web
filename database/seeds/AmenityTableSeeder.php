<?php

use App\Amenity;
use Illuminate\Database\Seeder;

class AmenityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Amenity::truncate();
        $amenity = Amenity::create([
            'amenity' => 'Wi-Fi',
            'icon' => 'wi-fi.svg'
        ]);
        $amenity = Amenity::create([
            'amenity' => 'Printer',
            'icon' => 'printer.svg'
        ]);
        $amenity = Amenity::create([
            'amenity' => 'Kitchen',
            'icon' => 'kitchen.svg'
        ]);
        $amenity = Amenity::create([
            'amenity' => 'Water Dispenser',
            'icon' => 'water-dispenser.svg'
        ]);
        $amenity = Amenity::create([
            'amenity' => 'Car Packing',
            'icon' => 'parking.svg'
        ]);
        $amenity = Amenity::create([
            'amenity' => 'Library',
            'icon' => 'library.svg'
        ]);
        $amenity = Amenity::create([
            'amenity' => 'Wheelchair Access',
            'icon' => 'wheelchair.svg'
        ]);
    }
}
