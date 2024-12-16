<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_room_name',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'class_room_id');
    }

    public function classRoomData()
    {
        return $this->hasMany(ClassRoomData::class, 'class_room_id');
    }
}
