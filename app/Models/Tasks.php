<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = "tasks";

    public function Work(){
        return $this->belongsToMany(Work::class);
    }
    public function Developers()
    {
        return $this->belongsTo(Developers::class);
    }
}
