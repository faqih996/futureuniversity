<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug', 'users_id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}