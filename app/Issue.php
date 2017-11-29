<?php

namespace App;
	

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $table = 'bookborrow';

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function book(){
    	return $this->belongsTo(Book::class);
    }
}
