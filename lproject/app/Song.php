<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'content'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
