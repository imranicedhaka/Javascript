<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PProduct extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(PCategory::class,'category_id','id');
    }

    public function supllier(){
        return $this->belongsTo(PSupplier::class,'supplier_id','id');
    }

    protected $dates = ['expire_date'];

    // Other model configurations...

    public function getStatusAttribute()
    {
        // Check if the expire_date is in the past
        if ($this->expire_date < now()) {
            return 'invalid';
        } else {
            return 'valid';
        }
    }
}