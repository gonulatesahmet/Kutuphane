<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class KutuphaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullName'=>'Ahmet Talha Gonulates',
                'birthDate'=>'1999-06-13',
                'age'=>22,
                'userType'=>'user',
                'email'=>'gonulates.ahmet@gmail.com',
                'password'=>Hash::make('123123123')
            ],
            [
                'fullName'=>'Admin 1',
                'birthDate'=>'1999-06-13',
                'age'=>22,
                'userType'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>Hash::make('123123123')
            ]
        ]);
        DB::table('author')->insert([
            [
                'fullName'=>'Yazar 1',
                'birthDate'=>'1820-01-01',
                'dateOfDeath'=>'1890-01-01',
                'age'=>70
            ],
            [
                'fullName'=>'Yazar 2',
                'birthDate'=>'1850-01-01',
                'dateOfDeath'=>'1910-01-01',
                'age'=>60
            ],
            [
                'fullName'=>'Yazar 3',
                'birthDate'=>'1910-01-01',
                'dateOfDeath'=>'1970-01-01',
                'age'=>60
            ]
        ]);
        DB::table('category')->insert([
            [
                'categoryName'=>'Kategori 1',
                'categoryCode'=>'Kod 1',
                'categoryDescription'=>'Aciklama 1',
                'categoryState'=>'Aktif'
            ],
            [
                'categoryName'=>'Kategori 2',
                'categoryCode'=>'Kod 2',
                'categoryDescription'=>'Aciklama 2',
                'categoryState'=>'Aktif'
            ],
            [
                'categoryName'=>'Kategori 3',
                'categoryCode'=>'Kod 3',
                'categoryDescription'=>'Aciklama 3',
                'categoryState'=>'Aktif'
            ]
        ]);
        DB::table('book')->insert([
            [
                'bookName'=>'Kitap 1',
                'bookCode'=>'123asd123',
                'bookDescription'=>'Aciklama 1',
                'pageCount'=>200,
                'price'=>20,
                'categoryId'=>1,
                'authorId'=>1,
                'bookState'=>'Mevcut'
            ],
            [
                'bookName'=>'Kitap 2',
                'bookCode'=>'321dsa321',
                'bookDescription'=>'Aciklama 2',
                'pageCount'=>200,
                'price'=>20,
                'categoryId'=>2,
                'authorId'=>2,
                'bookState'=>'Mevcut'
            ],
            [
                'bookName'=>'Kitap 3',
                'bookCode'=>'123asd123',
                'bookDescription'=>'Aciklama 3',
                'pageCount'=>200,
                'price'=>20,
                'categoryId'=>2,
                'authorId'=>1,
                'bookState'=>'Mevcut'
            ],
            [
                'bookName'=>'Kitap 4',
                'bookCode'=>'123asd123',
                'bookDescription'=>'Aciklama 4',
                'pageCount'=>200,
                'price'=>20,
                'categoryId'=>3,
                'authorId'=>2,
                'bookState'=>'Mevcut'
            ],
            [
                'bookName'=>'Kitap 5',
                'bookCode'=>'123asd123',
                'bookDescription'=>'Aciklama 5',
                'pageCount'=>200,
                'price'=>20,
                'categoryId'=>3,
                'authorId'=>3,
                'bookState'=>'Mevcut'
            ]
        ]);
    }
}
