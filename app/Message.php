<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'email', 'pesan'];

    protected $hidden = [];

    protected $primaryKey = 'message_id';
}
