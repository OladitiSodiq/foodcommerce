<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
  protected $table = 'food';

  protected $fillable = [
    'title', 'full_price', 'discounted_price', 'quantity', 'short_desc', 'full_desc', 'category', 'views', 'file'
  ];
}
