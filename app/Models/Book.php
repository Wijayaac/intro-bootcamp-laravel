<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        "isbn",
        "title",
        "author",
        "image_path",
        "publisher",
        "category",
        "pages",
        "language",
        "publish_date",
        "subjects",
        "desc",
    ];
}
