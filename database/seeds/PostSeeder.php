<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        ['title'=>'Membuat website dengan laravel', 'content'=>'belajar laravel'],
        ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
    ];
    DB::table('posts')->insert($data);
    }
}
