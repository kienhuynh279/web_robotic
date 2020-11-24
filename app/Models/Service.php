<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'ServiceId';
    protected $guarded = [];
    protected $fillable =
    [
        'TypeId',
         'Title',
         'Description',
         'Image',
         'Status'
    ];

    // public function Type()
    // {
    //     return $this->belongsTo('App\Models\Type','TypeId', 'TypeId');
    // }
}
