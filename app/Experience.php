<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    
    public function items () 
    {
        return $this->hasMany(ExperienceList::class);
    }

    protected $fillable = [
        'title', 
        'company', 
        'company_link',
        'start_date',
        'end_date',
        'detail'
    ];



}
