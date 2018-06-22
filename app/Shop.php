<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'name', 'valeur', 'img','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
