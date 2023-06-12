<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;
    
    protected $fillable = [
        'name',
        'image',
        'order',
    ];

    public $translatable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
