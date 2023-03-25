<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outgoing extends Model
{
    use HasFactory;

    public function scopeIndex($query, $yearMonth)
    {
        return $query->where('date', 'LIKE', $yearMonth);
    }
    public function scopeCategorySum($query, $category)
    {
        return $query->where('category', $category)->sum('yen');
    }
}
