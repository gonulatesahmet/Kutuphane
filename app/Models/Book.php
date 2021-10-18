<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    public $table = 'book';
    public $timestamps = true;

    protected $fillable =[
        'bookName',
        'bookCode',
        'bookDescription',
        'pageCount',
        'price',
        'categoryId',
        'categoryName',
        'authorId',
        'authorName',
        'bookState',
    ];
}
