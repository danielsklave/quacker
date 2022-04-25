<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    // go to the explore page and pass in users: 50 for each page
    public function __invoke() // instead of index bc theres only one function
    {
        return view('explore', [
            'users' => User::paginate(50)
        ]);
    }
}
