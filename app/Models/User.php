<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users'; //指定表名

    protected $primaryKey = 'id'; //指定主键

    public $timestamps = false; //时间戳自动维护

    protected $connection = 'connection-name'; //指定连接

    // 自动填充
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // 自动隐藏
    protected $hidden = [
        'password', 'remember_token',
    ];
}
