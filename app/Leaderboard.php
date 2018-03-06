<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','name','usertye','college','level','profile_avatar','prevlevcompleted_at','attempts','blocked',
    ];
}
