<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $tables = [
            'merchants',
            'checkins',
            'places',
            // 'opps',
            // 'users',
            'password_resets',
            // 'permissions',
            'permission_role',
            // 'roles',
            'role_user',
        ];


        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MerchantSeeder::class);

        Model::reguard();
    }
}
