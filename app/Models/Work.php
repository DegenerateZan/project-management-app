<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    public function Tasks()
    {
        return $this->belongsTo(Tasks::class);
    }

    public function Developers()
    {
        return $this->belongsTo(Developers::class);
    }
    
}
