<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'ProductId';
    protected $guarded = [];
    protected $fillable =
    [

         'Title',
     
         'Description',

    ];

    public function Category()
    {
        return $this->belongsTo('App\Models\Category','CategoryId', 'CategoryId');
    }
}
