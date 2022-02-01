<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'token'
    ];
}
// 406 - not Acceptable
// 409 - Conflict