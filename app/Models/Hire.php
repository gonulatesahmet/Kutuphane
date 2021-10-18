<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $table = 'hire';
    public $timestamps = true;

    protected $fillable = [
        'bookId',
        'bookName',
        'userId',
        'userName',
        'date',
        'hireState',
    ];
}
