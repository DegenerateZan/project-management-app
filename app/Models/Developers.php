<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developers extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Fillable data only 
    protected $fillable = [

        'name',
        'account_number',
        'telephone_number',
        'address',
        'email'

    ];

    public function Work(){
        return $this->belongsToMany(Work::class);
    }
    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
}
