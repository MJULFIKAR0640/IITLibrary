<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    protected $table= 'remarks'; 

    protected $fillable = [
        'book_id', 'user_id', 'remark',
    ];
    
    public function book()
 	{
 		return $this->belongsTo(Book::class);
 	} 
 	public function user()
 	{
 		return $this->belongsTo(User::class);
 	} 


}
