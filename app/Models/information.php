<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    protected $table = 'informations';
    protected   $fillable = [
        
        'name',
        'email',
        'contact',
        'address',
        'objective',

    ];
    
}
