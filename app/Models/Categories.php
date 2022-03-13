<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function getLinkAttribute() {
        $name = $this->name;
        return strtolower(str_replace(" ", "-", $name));
    }

    public function subcategories() {
        return $this->hasMany('App\Models\Subcategories', 'category');
    }
}
