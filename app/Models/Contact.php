<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
      'first_name',
      'last_name',
      'phone',
      'message'
    ];
}
