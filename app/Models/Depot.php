<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    use HasFactory;

    protected $table = "depots";

    protected $fillable = [
        'nom',
        'adresse',
        'tel',
        'image',
        'email',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
