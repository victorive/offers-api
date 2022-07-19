<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable =['product_title', 'vendor_id', 'price'];

    protected $hidden = ['created_at', 'updated_at'];

    public function vendor(){

        return $this->belongsTo(Vendor::class);
    }
}
