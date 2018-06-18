<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceList extends Model
{
    
    public function experience () 
    {
        return $this->belongsTo(Experience::class);
    }

}
