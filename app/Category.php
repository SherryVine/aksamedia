<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    Protected $table_name = 'categories';
    Protected $fillable = ['name', 'description'];
}
