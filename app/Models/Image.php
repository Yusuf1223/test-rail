<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url'
    ];
    /**
     * @var mixed
     */
    private $url;

    public function uploadImage(UploadedFile $file)
    {
        return $file->store('uploads', 'public');
    }

    public function removeImage()
    {
//        dd(Storage::disk('public')->exists('uploads'.$this->url)
        return Storage::disk('public')->delete('/uploads'.$this->url);
    }

    public function imageable()
    {
        return $this->morphTo();
    }
}
