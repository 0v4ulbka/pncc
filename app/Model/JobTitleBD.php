<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTitleBD extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'job_title',
    ];

}