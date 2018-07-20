<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class OrmController extends BaseController {

    /**
     * 一对一示例
     * @see /orm/hasone
     * @author gaowei <gaowei@smzdm.com>
     * @date 2018-07-20
     */
    public function hasOne() {
        $extends = User::find(1)->extends;
        dump($extends);

        $user = $extends->user;
        dump($user);
    }

    /**
     * 一对多示例
     * @see /orm/hasmany
     * @author gaowei <gaowei@smzdm.com>
     * @date 2018-07-20
     */
    public function hasMany() {
        $user = User::find(1);

        $auth_list = $user->auths;
        dump($auth_list);

        $auth = $auth_list[1];
        dump($auth->user);
    }

    /**
     * 多对多示例
     * @see /orm/belongsmany
     *
     * @author gaowei <gaowei@smzdm.com>
     * @date 2018-07-20
     */
    public function belongsMany() {

        $user_hua = User::find(1);
        $user_cheng = User::find(2);

        $hua_roles = $user_hua->roles;
        $cheng_roles = $user_cheng->roles;

        dump($hua_roles);
        dump($cheng_roles);

        $role2 = Role::find(2);
        $users = $role2->users;
        dump($users);
    }
}
