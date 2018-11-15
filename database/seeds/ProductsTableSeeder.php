<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
          'name' => 'Odol',
          'category_id' => '1',
          'description' => 'Pasta gigi',
          'price' => '10000',
      ]);
      DB::table('products')->insert([
          'name' => 'Sikat Gigi',
          'category_id' => '1',
          'description' => 'Buat sikatan',
          'price' => '9000',
      ]);
      DB::table('products')->insert([
          'name' => 'Kemeja Flanel',
          'category_id' => '2',
          'description' => 'Buat gaya-gayaan',
          'price' => '75000',
      ]);
      DB::table('products')->insert([
          'name' => 'Celana Jeans Kimbo',
          'category_id' => '2',
          'description' => 'Buat kuliah',
          'price' => '100000',
      ]);
    }
}
