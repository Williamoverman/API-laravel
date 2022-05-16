<?php

namespace App\Models\Model;

use App\Models\Model\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    public function product() {

        return $this->belongsTo(Product::class);

    }

}
