<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'employer',
        'logo',
        'location',
        'type',
        'salary',
        'category_id',


    ];
    // Relating tables to other
    public function jobs(){
        return $this->hasOne(Category::class,'id', 'category_id');

    }
}
