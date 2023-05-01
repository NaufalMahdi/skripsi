<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_id', 'user_id', 'slug', 'title','image', 'excerpt', 'body'];
    // protected $guarded = ['id'];
    // protected $with = ['kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
