<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    protected $fillable = [
        'title', 
        'college', 
        'college_link', 
        'datee',
        'detail'
    ];


}
