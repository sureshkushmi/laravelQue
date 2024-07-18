<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //get the users that owns the post
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'title',
        'content',
        'user_id', // Add user_id to the fillable property
    ];
}
