<?php

namespace App\Modules\Users\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

    protected $table = 'users';
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'date_of_birth',
        'gender',
        'picture',
        'country_code',
        'national_id',
        'passport_no',
        'phone',
        'is_active',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
