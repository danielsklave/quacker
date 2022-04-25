<?php

namespace App\Http\Controllers;

use App\Quack;
use Illuminate\Http\Request;

class QuacksController extends Controller
{
    // go to home page with the current user's timeline
    public function index()
    {
        return view('quacks.index', [
            'quacks' => current_user()->timeline()
        ]);
    }

    public function store()
    {
        // check if quack's content is valid
        $attributes = request()->validate(['body' => 'required|max:255']);
        // create a quack with current user's id and quacks content
        Quack::create([
            'user_id' => current_user()->id,
            'body' => $attributes['body']
        ]);
        
        return redirect()->route('home');
    }
}
