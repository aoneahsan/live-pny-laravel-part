<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllSiteForm extends Model
{
    protected $fillable = [
		'name', 'email', 'phone_number', 'city', 'subject', 'message', 'extra_field', 'form_is'
	];
}
