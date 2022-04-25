<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
// used for the Quack model // $this = current quack
trait Likable
{
    // add liked and dislikes collumn for the quack // called using withLikes()
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select quack_id, sum(liked) likes, sum(!liked) dislikes from likes group by quack_id',
            'likes',
            'likes.quack_id',
            'quacks.id'
        );
    }
    // adds or updates to 'like'(true) the liked column for the current quack and user
    public function like($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()
        ], [
            'liked' => true
        ]);
    }
    // adds or updates to 'dislike'(false) the liked column for the current quack and user
    public function dislike($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()
        ], [
            'liked' => false
        ]);
    } 
    // returns wether current quack is liked by the given user
    public function isLikedBy(User $user)
    {
        return (bool) $user->likes->where('quack_id', $this->id)->where('liked', true)->count();
    }
    // returns wether current quack is liked by the given user
    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes->where('quack_id', $this->id)->where('liked', false)->count();
    }
    // get all likes for the current quack
    public function likes()
    {
        // quack can be liked 
        return $this->hasMany(Like::class);
    }
}