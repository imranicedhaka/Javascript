<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product(){
      return $this->belongsTo(IProduct::class,'product_id','id');
  }


   public function category(){
      return $this->belongsTo(ICategory::class,'category_id','id');
  }
}