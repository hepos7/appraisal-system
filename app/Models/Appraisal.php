<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appraisal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'year',
        'h1',
        'h2',
    ];
    public $timestamps = false;

    public function user(): HasOne
    {
        return $this->belongsTo(User::class);
    }
}
