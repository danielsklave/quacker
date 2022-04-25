<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quack extends Model
{
    use Likable;

    protected $guarded = [];
    // get the user for the quack
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
