<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * 一对一关联
     * @author gaowei <gaowei@smzdm.com>
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * @date 2018-07-20
     */
    public function extends() {
        return $this->hasOne('App\Models\UserExtends');
    }

    /**
     * 一对多关联
     * @author gaowei <gaowei@smzdm.com>
     * @date 2018-07-20
     */
    public function auths() {
        return $this->hasMany('App\Models\UserAuth');
    }

    /**
     * 多对多关联
     * @author gaowei <gaowei@smzdm.com>
     * @date 2018-07-20
     */
    public function roles() {
        return $this->belongsToMany('App\Models\Role');
    }
}
