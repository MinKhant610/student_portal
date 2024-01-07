<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'roll', 'year'];

    public function scopeFilter($query, $filter){
        $query->when($filter['roll'] ?? false, function ($query, $roll) {
            $query->where('roll', $roll);
        });

        $query->when($filter['year'] ?? false, function ($query, $year) {
            $query->where('year', $year);
        });

        $query->when($filter['name']??false, function ($query, $name){
            $query->where('name', 'like', '%' . $name . '%');
        });
    }

}
