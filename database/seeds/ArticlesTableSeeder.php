<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      App\Article::truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
      DB::table('articles')->insert([
        'title' => 'Masyarakat menolak kerajaan ubur-ubur',
        'body' => 'Ini adalah isi dari artikel masyarakat menolak kerajaan ubur-ubur'
      ]);
      DB::table('articles')->insert([
        'title' => 'Presiden sahkan undang-undang ketenaga kerjaan',
        'body' => 'Ini isi dari presiden sahkan undang-undang ketenaga kerjaan'
      ]);
      DB::table('articles')->insert([
        'title' => 'Apple luncurkan jam tangan penembus waktu',
        'body' => 'Ini isi dari apple luncurkan jam tangan penembus waktu'
      ]);
    }
}
