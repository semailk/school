<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = ['img','title'];

    protected $casts = ['img' => 'array'];

    public function setImgAttribute($value)
    {
        $attribute_name = "img";
        $disk = "public";
        $destination_path = "galleries";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            Storage::disk('public')->delete($obj->img);
        });
    }
}
