<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->name 			= 'create-invoice';
        $permission->display_name	= 'Create Invoices';
        $permission->description 	= 'Create a new invoice';
        $permission->save();

        $permission = new Permission();
        $permission->name 			= 'edit-invoice';
        $permission->display_name	= 'Edit Invoices';
        $permission->description 	= 'Edit existing invoices';
        $permission->save();

        $permission = new Permission();
        $permission->name 			= 'delete-invoice';
        $permission->display_name	= 'Delete Invoices';
        $permission->description 	= 'Delete existing invoices';
        $permission->save();
    }
}
