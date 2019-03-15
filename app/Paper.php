<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use Notifiable;

    protected $fillable = ['thing'];
}
