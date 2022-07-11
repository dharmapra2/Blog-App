<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'userId';
    // protected $fillable = [
    //     'name',
    //     'password',
    // ];

    public function posts():HasMany
    {
        // hasMany for one-to-many relationship
        return $this->hasMany(Post::class, 'userId', 'userId');
    }
}
