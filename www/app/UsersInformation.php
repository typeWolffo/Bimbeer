<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersInformation extends Model
{
    public $table = 'users_information';

    protected $hidden = [
        'user_id'
    ];
}
