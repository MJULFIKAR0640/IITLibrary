<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestedbook extends Model
{
	protected $table= 'requestedbooks';
	public function user()
	{
		return $this->belongsTo(User::class);
	}   
}
