<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'cluster_id', 'firstname', 'lastname', 'contact', 'email', 'user_id',
	];
}
