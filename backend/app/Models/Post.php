<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'postId';
    // protected $fillable = [
    //     'title',
    //     'description',
    // ];

    public function users()
    {
        // hasMany for one-to-many relationship
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}
