<?php

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superAdmin = new Role();
        $role_superAdmin->name = "Super Admin";
        $role_superAdmin->description = "Super Admin User";
        $role_superAdmin->save();

        $role_admin = new Role();
        $role_admin->name = "Admin";
        $role_admin->description = "Admin User";
        $role_admin->save();
    }
}
