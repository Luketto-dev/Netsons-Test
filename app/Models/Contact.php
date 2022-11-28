<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];


    //relazione molti a uno tra contatti e utenti
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
