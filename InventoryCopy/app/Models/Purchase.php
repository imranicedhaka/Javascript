<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];
 
    public function product(){
      return $this->belongsTo(IProduct::class,'product_id','id');
  }


   public function supplier(){
      return $this->belongsTo(Supplier::class,'supplier_id','id');
  }

   public function unit(){
      return $this->belongsTo(Unit::class,'unit_id','id');
  }

   public function category(){
      return $this->belongsTo(ICategory::class,'category_id','id');
  }

}
