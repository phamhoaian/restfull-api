<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Jason Bourne',
            'email' => 'jason@gmail.com',
            'password' => bcrypt('jasonB')
        ]);
    }
}
