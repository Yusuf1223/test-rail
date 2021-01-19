<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'body',
        'link',
    ];
    /**
     * @var mixed
     */
    private $id;

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name']=$value;
        $this->attributes['slug']=Str::slug($value);
    }
}
