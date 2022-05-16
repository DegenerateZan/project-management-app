<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function developer()
    {
        return $this->belongsTo(Developers::class);
    }
    public function finances()
    {
        return $this->morphMany(Finance::class, 'financetable');
    }
    public function finance(){
        return $this->hasMany(Finance::class);
    }
}
