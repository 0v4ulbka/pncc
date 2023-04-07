<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'gender',
        'birthday',
        'address',
        'job_title',
        'subdivision',
    ];
    public function getJobTitle()
    {
        return $this->belongsTo(JobTitleBD::class, 'job_title', 'id');
    }

    public function getSubdivision()
    {
        return $this->belongsTo(SubdivisionsBD::class,'subdivision','id');
    }

}