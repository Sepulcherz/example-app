<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController2 extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::select('select * from posts ORDER BY id DESC');

        foreach ($posts as $post) {

            echo '<article onmouseover="changeColor(this)" onmouseout="changeColorBack(this)" id="most_visited">';
            echo $post->description;
            echo '</article>';

        }
    }
}
