<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'ImageId';
    protected $guarded = [];
    protected $fillable =
    [
         'src',
         'alt'
    ];
}
