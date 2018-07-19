<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {

    public function smzdm() {
        //TODO SOMETHING
    }

    public function test() {
        User::create(['asdf']);
        User::find(1);
        DB::query("");
        $address = User::find(1)->address();
    }
}
