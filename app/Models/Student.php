<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'student_name',
        'birth_day',
        'student_ID',
        'password',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function studentData()
    {
        return $this->hasMany(StudentData::class, 'student_id');
    }
}
