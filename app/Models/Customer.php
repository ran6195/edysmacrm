<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'partita_iva',
        'referente',
        'telefono',
        'email',
        'note',
    ];

    public function domains()
    {
        return $this->hasMany(Domain::class, 'id_customer');
    }
}
