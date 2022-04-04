<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected   $fillable = ["name", "description", "duration","user_id"];

    function user()
    {
        return $this->belongsTo(User::class);
    }
    function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    function users()
    {
        return $this->belongsToMany(User::class,'course_users');
    }
}
