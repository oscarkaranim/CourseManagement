<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class DegreeProgram extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'degree_program_title',
        'degree_qualification',
        'ucas_code','degree_program_description','keywords',
    ];
}
