<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'class',
        'teacher_id',
        'image',
        'description',
        'school_id'
    ];

    function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    function about()
    {
        return $this->belongsTo(About::class);
    }
}
