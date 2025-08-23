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
        'managed_by',
        'id_customer',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
