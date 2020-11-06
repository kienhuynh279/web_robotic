<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{ 
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'UserId';
    protected $guarded = [];
    protected $fillable = [
         'Name',
         'Gender',
         'Birthday',
         'Email',
         'Password',
         'Image',
         'Status'
    ];

    public function News()
    {
        return $this->hasMany('App\Models\News', 'NewId', 'NewId');
    }

    public function Docs()
    {
        return $this->hasMany('App\Models\Docs', 'DocId', 'DocId');
    }
}
