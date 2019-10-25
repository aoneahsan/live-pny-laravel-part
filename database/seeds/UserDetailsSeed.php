<?php

use Illuminate\Database\Seeder;

use App\Models\UserDetails;

class UserDetailsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultUserDetails = new UserDetails();
        $defaultUserDetails->user_id = 0;
        $defaultUserDetails->first_name = "First Name";
        $defaultUserDetails->last_name = "Last Name";
        $defaultUserDetails->address = "address";
        $defaultUserDetails->cnic = "CNIC";
        $defaultUserDetails->profile_image = "";
        $defaultUserDetails->location = "Location";
        $defaultUserDetails->city = "City";
        $defaultUserDetails->latitude = "Latitude";
        $defaultUserDetails->longitude = "Longitude";
        $defaultUserDetails->skills = "Skills";
        $defaultUserDetails->occupation = "Occupation";
        $defaultUserDetails->user_type = "User Type";
        $defaultUserDetails->save();
    }

}
