<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    protected $table = 'docs';
    protected $primaryKey = 'DocId';
    protected $guarded = [];
    protected $fillable =
    [
        'UserId',
        'Title',
        'Description',
        'Image',
        'Create_at',
        'Status'
    ];

    public function User()
    {
        return $this->belongsTo('App\Models\User','UserId', 'UserId');
    }
}
