<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
<<<<<<< HEAD
    
    protected $guarded=[];
=======

    protected $guarded=[];

    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }
>>>>>>> 9e14ce35d884afc1d26c1050ca880e2998315d05
}
