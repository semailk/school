<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Account extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'user_id',
        'attendance',
        'appraisal',
        'home_work',
    ];

    protected $casts = [
        'appraisal' => 'array'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
