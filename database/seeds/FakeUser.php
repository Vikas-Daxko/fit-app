<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FakeUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,20) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->name,
                'email' => $faker->email,
                'status' => 1,
                'role' => 4,
	            'password' => bcrypt('secret'),
	        ]);
	    }
    }
}