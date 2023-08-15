<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


         $this->call([
             CategorySeeder::class,
             WeekSeeder::class,
             AboutSeeder::class,
             TeacherSeeder::class,
             ClassesSeeder::class,
             CourseSeeder::class,
             BlogSeeder::class,
             StudentSeeder::class,
//             TypeSeeder::class
         ]);
        \App\Models\User::create([
            'name' => 'SeniorAdmin',
            'username' => 'owner',
            'password'=>bcrypt('owner1505'),
            'school_id'=>null
        ]);
        \App\Models\User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password'=>bcrypt('password'),
            'school_id'=>1
        ]);
        Role::insert([
            ['title'=>'Director'],
            ['title'=>'Zam Director'],
            ['title'=>'Zavuch'],
        ]);
        foreach (Course::all() as $k=>$c) {
            if ($k%2==0){
                $c->weeks()->sync([1,3,5]);
            }else{
                $c->weeks()->sync([2,4,6]);
            }
        }
    }
}
