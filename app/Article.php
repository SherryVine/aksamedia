<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table_name = 'articles';
    protected $fillable = ['id', 'title', 'body'];

    public function category(){
      return $this->belongsToMany('App\Category')->withTimestamps();
    }
}
