<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
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
