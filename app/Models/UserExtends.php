<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExtends extends Model {

    protected $table = 'users_extends';

    /**
     * 一对一反向关联
     * @author gaowei <gaowei@smzdm.com>
     * @date 2018-07-20
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
