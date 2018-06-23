<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function getRouteKeyName () {
        return 'slug';
    } 

    protected $fillable = ['title', 'slug', 'detail', 'datee'];

    public function elements () 
    {
        return $this->belongsToMany(Element::class, 'element_project');
    }

    public function pages () 
    {
        return $this->hasMany(ProjectPage::class);
    }

    public function getPathAttribute () {
        return asset("api/projects/$this->slug");
    }


}
