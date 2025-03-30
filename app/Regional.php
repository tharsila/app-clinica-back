<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regional extends Model
{
    use SoftDeletes;

    protected $keyType = 'string';
    
    public $incrementing = false;

    protected $fillable = ['label'];
    
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public function clinics ():HasMany
    {
        return $this->hasMany(Clinic::class);
    }
}
