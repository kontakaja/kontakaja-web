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
        // if(request('search')) {
        //     return $query->where('name', 'like', '%' . request('search') . '%')
        //                  ->orWhere('phone_number', 'like', '%' . request('search') . '%');
        // }

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
        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query->where('name', 'like', '%' . $search . '%')
        //                  ->orWhere('phone_number', 'like', '%' . $search . '%');
        // });

        // $query->when($filters['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('name', $category);
        //     });
        // });

}
