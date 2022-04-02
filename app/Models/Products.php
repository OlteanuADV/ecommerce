<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;
class Products extends Model
{
    use HasFactory;

    public function getFirstPictureAttribute() 
    {
        $images = Storage::files('/products/product_'.$this->id);
        return $images[0];
    }
}
