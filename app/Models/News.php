<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'NewId';
    protected $guarded = [];
    protected $fillable =
    [
        'UserId',
         'Title',
         'Description',
         'Image',
         'created_at',
         "updated_at",
         'Status'
    ];

    public function User()
    {
        return $this->belongsTo('App\Models\User','UserId', 'UserId');
    }
}
