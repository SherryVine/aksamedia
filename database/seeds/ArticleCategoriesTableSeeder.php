<?php

use Illuminate\Database\Seeder;

class ArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('article_category')->truncate();
      DB::table('article_category')->insert([
        'article_id' => 1,
        'category_id' => 1,
      ]);
      DB::table('article_category')->insert([
        'article_id' => 2,
        'category_id' => 1,
      ]);
      DB::table('article_category')->insert([
        'article_id' => 3,
        'category_id' => 2,
      ]);
    }
}
