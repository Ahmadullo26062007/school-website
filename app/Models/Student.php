<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'fullname',
        'class_id',
        'school_id'
    ];
    const TYPES=[
        '0'=>null,
        '1'=>'IELTS',
        '2'=>'CEFR',
        '3'=>'IT',
    ];
    const DEGREE=[
        '0'=>null,
        '2'=>'B2',
        '3'=>'C1',
        '4'=>'C2'
    ];
    public function about()
    {
        return $this->belongsTo(About::class);
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }


    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
