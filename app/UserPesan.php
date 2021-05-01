<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPesan extends Model
{
    protected $table = 'user_pemesanan';
    protected $fillable = [
        'id_user','id_pemesanan'
    ];
}
