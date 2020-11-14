<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = "banners";
    protected $primaryKey = "BannerId";
    public $timestamps = false;
    protected $fillable = [
        "Title",
        "Description",
        "Link",
        "Background",
        "Object"
    ];
}
