<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::insert([
            ['title' => 'jnknln', 'image' => '20492370.jpg', 'description' => 'bcsdcjdslcsdbjsdbsdjl', 'category_id' => 1, 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1],
            ['title' => 'jnknlnaf', 'image' => '20492370.jpg', 'description' => 'bcsdcjdslcsdbjsdbsdjl', 'category_id' => 2, 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1],
            ['title' => 'jnknlnaf', 'image' => '20492370.jpg', 'description' => 'bcsdcjdslcsdbjsdbsdjl', 'category_id' => 3, 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1],
            ['title' => 'jnknlnweaf', 'image' => '20492370.jpg', 'description' => 'bcsdcjdslcsdbjsdbsdjl', 'category_id' => 4, 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1],
            ['title' => 'jnknlnweafewfe', 'image' => '20492370.jpg', 'description' => 'bcsdcjdslcsdbjsdbsdjl', 'category_id' => 1, 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1],
          ]);
    }
}
