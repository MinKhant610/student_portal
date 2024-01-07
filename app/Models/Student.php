<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'roll', 'year', 'sub1', 'sub2', 'sub3', 'sub4', 'sub5', 'sub6', 'sub7'];

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
