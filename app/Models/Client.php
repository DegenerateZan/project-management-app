<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    //fillable data only / hanya data yang bisa di isi


    public function Project()
    {
        return $this->hasMany(Project::class);
    }
}
