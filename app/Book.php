<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table= 'books';
 	public function bookBorrow()
 	{
 		return $this->hasOne(Issue::class);
 	}   

 	public function remarks()
    {
        return $this->hasMany(Remark::class);
    }

    public function reserves()
    {
        return $this->hasMany(Resevation::class);
    }
}
