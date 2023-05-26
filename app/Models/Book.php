<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        "author_id",
        "image_path",
        "publisher",
        "category",
        "pages",
        "language",
        "publish_date",
        "subjects",
        "desc",
        "user_id"
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
