<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_room_id',
        'room_name',
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class, 'class_room_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'room_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'room_id');
    }

    public function studentData()
    {
        return $this->hasMany(StudentData::class, 'room_id');
    }

    public function classRoomData()
    {
        return $this->hasMany(ClassRoomData::class, 'room_id');
    }
}
