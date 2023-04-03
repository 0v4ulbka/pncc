<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubdivisionsBD extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'type',
        'subdivision',
    ];
}