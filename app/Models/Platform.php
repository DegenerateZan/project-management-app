<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function project_platform()
    {
        return $this->belongsTo(ProjectPlatfrom::class);
    }
}
