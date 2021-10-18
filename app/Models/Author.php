<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps =true;
    public $table = 'author';

    protected $fillable = [
        'fullName',
        'birthDate',
        'dateOfDeath',
        'age',
    ];
}
