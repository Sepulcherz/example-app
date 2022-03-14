<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users');

        foreach ($users as $user) {
            echo '<li>';
            echo $user->name;
            echo '</li>';
            echo '<br>';
        }
    }
}
