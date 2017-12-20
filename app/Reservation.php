<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table= 'reserves'; 

    public function book()
 	{
 		return $this->belongsTo(Book::class);
 	} 
 	public function user()
 	{
 		return $this->belongsTo(User::class);
 	} 
}
