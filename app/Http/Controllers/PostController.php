<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::select('select * from articles');

        foreach ($posts as $post) {
            echo $post->description;
            echo '<br>';
        }
    }
}
