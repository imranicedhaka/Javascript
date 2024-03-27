<?php

namespace App\Exports;
use App\Models\PProduct;
use Maatwebsite\Excel\Concerns\FromCollection;
class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PProduct::select('product_name','category_id','supplier_id','product_code','product_garage','product_image','product_store','buying_date','expire_date','buying_price','selling_price')->get();
    }
}
