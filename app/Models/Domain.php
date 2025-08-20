<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domain extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'status',
        'owner',
        'managed_by',
    ];
    // ...existing code...
}
