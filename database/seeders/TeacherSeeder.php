<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::insert([
            ['firstname'=>"jeny",'lastname'=>"jenies",'category'=>'matematika','image'=>'20492370.jpg','created_at'=>'2023-06-26 15:33:47','school_id'=>1],
            ['firstname'=>"jeny1",'lastname'=>"jenies1",'category'=>'inglis tili','image'=>'20492370.jpg','created_at'=>'2023-06-26 15:33:47','school_id'=>1],
            ['firstname'=>"jeny2",'lastname'=>"jenies2",'category'=>'rus tili','image'=>'20492370.jpg','created_at'=>'2023-06-26 15:33:47','school_id'=>1],
            ['firstname'=>"jeny3",'lastname'=>"jenies3",'category'=>'ona tili','image'=>'20492370.jpg','created_at'=>'2023-06-26 15:33:47','school_id'=>1],
            ['firstname'=>"jeny4",'lastname'=>"jenies4",'category'=>'fizika','image'=>'20492370.jpg','created_at'=>'2023-06-26 15:33:47','school_id'=>1]
        ]);
    }
}
