<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    protected $primaryKey = 'TypeId';
    protected $guarded = [];
    protected $fillable =
    [
        'Title',
        'Status'
    ];

    public function Service()
    {
        return $this->hasMany('App\Models\Service', 'TypeId', 'TypeId');
    }
}
