<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UsersModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UsersModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UsersModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UsersModel query()
 * @mixin \Eloquent
 */
class UsersModel extends Model
{
    protected $table = 'users';
    protected $fillable = ['user_id', 'channel_id', 'name', 'user_type', 'xxtState',
        'nick_name', 'province_id', 'province_name', 'class_id', 'class_name',
        'grade_id', 'grade_name', 'school_id', 'school_name' ,'level' ,'expire_time'];
}
