<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];


    /**
     * @var array
     */
    protected $fillable =
    [
        'name',
        'age'

    ];
}
