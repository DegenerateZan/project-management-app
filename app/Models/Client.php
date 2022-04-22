<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Client extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = ['id'];
    
    //fillable data only / hanya data yang bisa di isi


    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
