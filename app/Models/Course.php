<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'name',
        'teacher_id',
        'description',
        'image',
        'start_time',
        'end_time',
        'price',
        'school_id'
    ];

    function weeks()
    {
     return $this->belongsToMany(week::class);
    }

    function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    function about()
    {
        return $this->belongsTo(About::class);
    }

   public function count()
    {
        return count(Course::all()->ToArray());
    }
}
