<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'name',
        'pages',
        'category_id'
    ];

    public function bookCategory () {
        return $this->belongsTo(BookCategory::class,'category_id','id');
    }

    public function contributors () {
        return $this->hasMany(Contributor::class);
    }
}
