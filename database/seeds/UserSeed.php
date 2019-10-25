<?php

use Illuminate\Database\Seeder;

use App\User;

use App\Models\Role;
use App\Models\UserDetails;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = Role::where('name', 'Super Admin')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        
        $super_admin = new User();
        $super_admin->name = "Super Admin User";
        $super_admin->email = "superadmin@project.com";
        $super_admin->password = bcrypt('123456');
        $super_admin->save();
        $SA_U_D = new UserDetails();
        $SA_U_D->user_id = $super_admin->id;
        $SA_U_D->first_name = "Super Admin";
        $SA_U_D->save();
        $super_admin->roles()->attach($role_super_admin);

        $admin = new User();
        $admin->name = "Admin User";
        $admin->email = "admin@project.com";
        $admin->password = bcrypt('123456');
        $admin->save();
        $A_U_D = new UserDetails();
        $A_U_D->user_id = $admin->id;
        $A_U_D->first_name = "Admin";
        $A_U_D->save();
        $admin->roles()->attach($role_admin);
    }
}
