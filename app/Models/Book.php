<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dates = ['publish_date'];
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
