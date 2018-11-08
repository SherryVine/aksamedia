<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile_detail extends Model
{
    Protected $table_name = 'profile_details';

    Protected $fillable = ['name', 'placebirth', 'datebirth', 'gender', 'email', 'address', 'motto'];
}
