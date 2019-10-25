<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\EnrollStudent;

class SystemController extends Controller
{
    
    public function showDashborad()
    {    	
        $total_users = User::count();
        $admins = 0;
        $users_c = User::with('roles')->get();
        $enroll_students = EnrollStudent::count();
        foreach ($users_c as $user) {
            if ($user->roles[0]->id === 2) {
                $admins++;
            }
        }
        return view('project.dashborad.index', compact(
            'total_users',
            'admins',
            'enroll_students'
        ));
    }

}
