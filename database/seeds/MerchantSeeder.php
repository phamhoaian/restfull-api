<?php

use Illuminate\Database\Seeder;
use App\Models\Merchant;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 100; $i++) 
        { 
        	Merchant::create([
        		'name'			=> $faker->company,
        		'website'		=> $faker->url,
        		'phone'			=> $faker->phoneNumber,
        		'description'	=> $faker->text(200),
    		]);
        }
    }
}
