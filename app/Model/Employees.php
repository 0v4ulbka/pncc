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
    public function jobTitle()
    {
        return $this->hasMany(JobTitleBD::class, 'foreign_key', 'owner_key');
    }
}