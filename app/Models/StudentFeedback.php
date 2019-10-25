<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFeedback extends Model
{
    protected $fillable = [
		'name', 'description', 'url', 'extra_field'
	];
}
