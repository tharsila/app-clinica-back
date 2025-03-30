<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    public function clinics()
    {
        return $this->belongsToMany(Clinic::class);
    }
}
