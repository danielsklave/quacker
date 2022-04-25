<?php

namespace App;
// used for the User model // $this = current user
trait Followable
{
    // adds current user's and given user's follow relationship to the follows table
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    // removes current user's and given user's follow relationship from the follows table
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user); 
    }

    public function toggleFollow(User $user)
    {
        // either follows or unfollows the given user
        // if($this->following($user)){
        //     // have the auth'd user unfollow the given user
        //     return $this->unfollow($user);
        // }
        //     // have the auth'd user unfollow the given user
        //     return $this->follow($user);
        return $this->follows()->toggle($user);
    }
    // check if current user is following given user
    public function following(User $user) 
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    // gets all the people the current user follows
    public function follows()
    {
        // A user can follow many other users 
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    
}