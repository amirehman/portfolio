<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{

    protected $fillable = ['name', 'slug', 'link', 'elements'];


    public function getRouteKeyName () {
        return 'slug';
    } 

    public function projects () 
    {
        return $this->belongsToMany(Project::class, 'element_project');
    }

    public function getPathAttribute () {
        return asset("api/elements/$this->slug");
    }


}
