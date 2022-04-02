<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['room_id', 'recomplex_id', 'totalarea'];

    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function recomplex(){
        return $this->belongsTo(Recomplex::class);
    }
}
