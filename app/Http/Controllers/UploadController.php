<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => ['required', 'string', 'max:255'],
        ]);

        $post = Post::create([
            'description' => $request->description,
        ]);

        event(new Registered($post));

        return redirect('/dashboard');
    }
}
