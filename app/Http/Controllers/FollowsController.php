<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    
        // for the current user: follow or unfollow the given user
    public function store(User $user)
    {
        current_user()->toggleFollow($user);
        // route back to the given user's profile page
        return back();
    }

}
