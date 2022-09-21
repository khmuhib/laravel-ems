<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    protected $table = 'contributor';

    protected $fillable = [
        'name',
        'book_id'
    ];

    public function books () {
        return $this->belongsTo(Book::class,'book_id', 'id');
    }
}
