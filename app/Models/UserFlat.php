<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFlat extends Model
{
    use HasFactory;

    protected $table = 'users_flats';

    protected $fillable = [
        'user_id',
        'flat_id',
        'status_id',
        'gdate',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
