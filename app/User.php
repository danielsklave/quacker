<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable; // Followable trait stores follow functions

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // gets the path to the avatar image (can use dafault)
    public function getAvatarAttribute($value)
    {
        return asset($value ? 'storage/' . $value : '/images/default-avatar.jpeg');
    
    }
    // hash the password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    // gets all following and current user's quacks
    public function timeline()
    {
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return Quack::whereIn('user_id', $ids)->withLikes()->latest()->paginate(50); // orWhere('user_id, $this->id')
    }

    // gets all user's quacks
    public function quacks()
    {
        // user can have many quacks
        return $this->hasMany(Quack::class)->latest();
    }

    // gets all user's likes
    public function likes() {
        // user can have many likes
        return $this->hasMany(Like::class);
    }

    // gets the path to user's profile
    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }
    // public function getRouteKeyName()
    // {
    //     return 'name'; // uses name instead of id
    // }
}
