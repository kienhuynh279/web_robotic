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
        // 'CategoryId',
         'Title',
        //  'Image',
        //  'Specification',
        //  'Dimension',
        //  'Application',
         'Description',
        //  'Status'
    ];
}
