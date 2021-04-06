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
        'paid_in',
        'paid_before'
    ];

    protected $dates = [
//        'attendance',
        'paid_in',
        'paid_before'
    ];
    protected $casts = [
        'attendance' => 'array',
        'appraisal' => 'array',
        'home_work' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
