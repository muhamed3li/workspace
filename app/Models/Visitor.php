<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place',
        'date',
        'time',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
