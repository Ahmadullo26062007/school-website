<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'description',
        'phone_number',
        'start_time',
        'end_time',
        'viloyat',
        'tuman',
        'facebook',
        'instagram',
    ];

   public function teachers()
    {
        return $this->hasMany(Teacher::class,'school_id');
    }
    public function classes()
    {
        return $this->hasMany(Classes::class,'school_id');
    }
    public function courses()
    {
        return $this->hasMany(Course::class,'school_id');
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class,'school_id');
    }
    public function students()
    {
        return $this->hasMany(Student::class,'school_id');
    }
    public function users()
    {
        return $this->hasMany(User::class,'school_id');
    }


    function GreatTeachers()
    {
        $c=0;

        foreach ($this->teachers as $t){
         if (count($t->degrees)!==0){
        if($t->degrees[0]->type_id ==1){
             if($c++ == 1)continue;
        }
         }

        }

        return $c;
    }

}
