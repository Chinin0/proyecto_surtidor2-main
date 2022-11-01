<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    //relacion muchos a muchos
    public function posts(){
        return $this->belongToMany(Post::class);
    }
}
