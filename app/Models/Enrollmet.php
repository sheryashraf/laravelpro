<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollmet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','course_id'
    ];
    protected $table='entrollments';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
