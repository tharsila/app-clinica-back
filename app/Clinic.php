<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'corporate_name',
        'trade_name',
        'cnpj',
        'regional_id',
        'opening_date',
        'active'
    ];
    
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    public function regional()
    {
        return $this->belongsTo(Regional::class);
    }
    
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }
}
