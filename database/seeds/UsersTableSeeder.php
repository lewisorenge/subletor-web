<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        User::truncate();
        for($i=0; $i<20; $i++) {
            $user = User::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => bcrypt('123456'),
                'date_of_birth' => $faker->date(),
                'about' => $faker->paragraph(),
                'verified' => $faker->numberBetween($min=0, $max=1),
                'status' => $faker->numberBetween($min=0, $max=1),
            ]);
        }
    }
}
