<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
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
        return $this->hasMany(Degree::class);
    }
}
