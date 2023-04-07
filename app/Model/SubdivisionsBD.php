<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubdivisionsBD extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'subdivision',
        'type',
    ];

    public function getEmployers()
    {
        return $this->belongsTo(Employees::class, 'id', 'subdivision');

    }
}