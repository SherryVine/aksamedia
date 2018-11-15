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
      DB::table('categories')->insert([
          'name' => 'Alat Mandi',
          'description' => 'Buat membersihkan badan dari kuman jahat',
      ]);
      DB::table('categories')->insert([
          'name' => 'Fashion',
          'description' => 'Penutup tubuh',
      ]);
    }
}
