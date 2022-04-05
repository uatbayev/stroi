<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recomplex extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name','description','price','photo','district_id','floor_id','hometype_id'];


    public function district(){
        return $this->belongsTo(District::class);
    }
    public function floor(){
        return $this->belongsTo(Floor::class);
    }
    public function hometype(){
        return $this->belongsTo(Hometype::class);
    }

}
