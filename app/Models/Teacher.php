<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'firstname',
        'lastname',
        'category',
        'image',
        'school_id'
    ];

    public function classes()
    {
        return $this->hasOne(Classes::class);
    }
    public function about()
    {
        return $this->belongsTo(About::class);
    }
    public function degrees()
    {
        return $this->hasOne(Degree::class);
    }
}
