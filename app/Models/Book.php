<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('descriptions', 'like', '%' . $search . '%');
        });
    }

    public function writers() {
        return $this->belongsToMany(Writer::class, 'books_writers', 'book_id', 'writer_id');
    }
}
