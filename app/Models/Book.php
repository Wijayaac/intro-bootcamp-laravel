<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ["deleted_at"];
    protected $primaryKey = 'isbn';
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
