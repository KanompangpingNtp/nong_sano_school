<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjects_name',
        'subjects_status',
    ];

    public function studentData()
    {
        return $this->hasMany(StudentData::class, 'subjects_id');
    }

    public function classRoomData()
    {
        return $this->hasMany(ClassRoomData::class, 'subjects_id');
    }
}
