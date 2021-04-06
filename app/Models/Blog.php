<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'title',
        'content',
        'img'
    ];

    public function setImgAttribute($value)
    {
        $attribute_name = "img";
        $disk = "storage";
        $destination_path = "blogs";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            Storage::disk('storage')->delete($obj->img);
        });
    }
}
