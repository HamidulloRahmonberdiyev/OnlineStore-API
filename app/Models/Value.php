<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Value extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'attribute_id', 
        'name',
    ];

    public array $translatable = ['name'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

}
