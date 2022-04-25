<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    // go to passed in user's profile page with their quacks
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'quacks' => $user->quacks()->withLikes()->paginate(50)
        ]);
    }

    // go to profile edit page for the user
    public function edit(User $user)
    {
        // $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        // validate and update given attributes
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'avatar' => ['file'],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);
        if (request('avatar')) {
            // store the new avatar in the avatars folder
            $attributes['avatar'] = request('avatar')->store('avatars');
        }
        $user->update($attributes);
        // redirect to users profile page
        return redirect($user->path());
    }
}
