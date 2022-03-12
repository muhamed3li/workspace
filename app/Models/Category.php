<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visitor;

class Category extends Model
{
    use HasFactory;

    public function visitor()
    {
        return $this->hasMany(Visitor::class);
    }
}
