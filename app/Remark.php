<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    protected $table= 'remarks'; 

    protected $fillable = [
        'book_id', 'user_id', 'remark',
    ];
    
    public function books()
 	{
 		return $this->belongsTo(Boook::class);
 	} 
 	public function users()
 	{
 		return $this->belongsTo(User::class);
 	} 


}
