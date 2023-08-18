<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $fillable=[
        'fullname',
        'role_id',
        'school_id',
        'image'
    ];
    public function role(){

        return $this->belongsTo(Role::class);

    }

    public function schools()
    {
        return $this->belongsTo(About::class);
    }
}
