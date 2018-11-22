<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      App\Category::truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
      DB::table('categories')->insert([
        'name' => 'Sosial'
      ]);
      DB::table('categories')->insert([
        'name' => 'Teknologi'
      ]);
      DB::table('categories')->insert([
        'name' => 'Ekonomi'
      ]);
    }
}
