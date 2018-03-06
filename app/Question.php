<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'questno','quest','usertype','answer',
    ];
}
