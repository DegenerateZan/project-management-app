<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function finacetable()
    {
      return $this->morphTo();
    }
    public function salaries(){
        return $this->hasMany(Salary::class);
    }
    public function payments(){
      return $this->hasMany(Payment::class);
    }
}
