<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Chat extends Model
{
    protected $fillable = [
        'message','status','status_message', 'user_id', 'to_id'
    ];
}
