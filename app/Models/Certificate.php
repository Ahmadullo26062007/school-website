<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable=[
        'type',
        'degree',
        'ball',
        'student_id',
    ];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
