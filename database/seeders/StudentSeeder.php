<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            ['fullname'=>'Tomy keyn','class_id'=>2,'school_id'=>1],
            ['fullname'=>'Tomy keyn1','class_id'=>4,'school_id'=>1],
            ['fullname'=>'Tomy keyn2','class_id'=>5,'school_id'=>1],
            ['fullname'=>'Tomy keyn3','class_id'=>6,'school_id'=>1],
            ['fullname'=>'Tomy keyn4','class_id'=>2,'school_id'=>1],
            ['fullname'=>'Tomy keyn5','class_id'=>3,'school_id'=>1],
            ['fullname'=>'Tomy keyn6','class_id'=>2,'school_id'=>1],
            ['fullname'=>'Tomy keyn7','class_id'=>5,'school_id'=>1],
        ]);
    }
}
