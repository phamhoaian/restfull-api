<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name 		= 'owner';
        $role->display_name	= 'Project Owner';
        $role->description 	= 'User is the owner of a given project';
        $role->save();

        $role = new Role();
        $role->name 		= 'admin';
        $role->display_name	= 'Admin User';
        $role->description 	= 'User is the admin of a given project';
        $role->save();
    }
}
