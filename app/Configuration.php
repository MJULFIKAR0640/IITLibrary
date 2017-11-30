<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'booksettings';

    protected $fillable = [
        'days', 'fine',
    ];

}
