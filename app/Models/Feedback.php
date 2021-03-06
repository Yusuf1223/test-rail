<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'message',
        'viewed'
    ];

    protected $casts = [
        'viewed' => 'boolean'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
