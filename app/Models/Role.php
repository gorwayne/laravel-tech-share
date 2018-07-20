<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $table = 'roles';

    /**
     * 多对多反向关联
     * @author gaowei <gaowei@smzdm.com>
     * @date 2018-07-20
     */
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
