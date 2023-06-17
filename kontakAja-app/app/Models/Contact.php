<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if (request('search')) {
            $search = '%' . request('search') . '%';
            $query->where(function ($query) use ($search) {
                $query->where('contacts.name', 'like', $search)
                      ->orWhere('contacts.phone_number', 'like', $search)
                      ->orWhereHas('category', function ($query) use ($search) {
                          $query->where('name', 'like', $search);
                      });
            });
        }

        return $query;
    }

}
