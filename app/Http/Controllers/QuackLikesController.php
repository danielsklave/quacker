<?php

namespace App\Http\Controllers;

use App\Quack;
use Illuminate\Http\Request;

class QuackLikesController extends Controller
{
    // make the quack liked by the current user
    public function store(Quack $quack)
    {
        $quack->like(current_user());
        return back();
    }

    // make the quack disliked by the current user
    public function destroy(Quack $quack)
    {
        $quack->dislike(current_user());
        return back();
    }
}
