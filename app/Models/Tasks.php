<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = "work";

    public function Work(){
        return $this->belongsToMany(Work::class);
    }
}
