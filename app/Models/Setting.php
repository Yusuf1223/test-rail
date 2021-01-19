<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'social',
        'email',
        'address',
        'phone',
    ];

    protected $casts = [
        'socials' => 'array'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
