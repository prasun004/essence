<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //migration garyo aba models baki blogs post dekhauna

    protected $fillable = [

      'title',
      'content'

    ];

}
