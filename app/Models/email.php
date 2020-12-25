<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'photo','created_by'    ];
}
