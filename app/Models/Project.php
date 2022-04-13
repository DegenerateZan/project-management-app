<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
