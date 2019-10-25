<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollStudent extends Model
{
    protected $fillable = [
		'package_id', 'user_id', 'name', 'email', 'phone_number', 'city', 'address', 'current_edu', 'profession', 'reason', 'extra_field'
	];
}
