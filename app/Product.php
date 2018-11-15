<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  Protected $table_name = 'products';
  Protected $fillable = ['category_id', 'product_name', 'product_description', 'price'];
}
