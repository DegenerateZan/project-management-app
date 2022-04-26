<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPlatfrom extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
     
    protected $table = 'project_platforms';

     public function project()
    {
        return $this->hasMany(Project::class);
    }
    public function platform()
    {
        return $this->hasMany(Platform::class);
    }

}
