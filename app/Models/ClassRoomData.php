<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoomData extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_room_id',
        'subjects_id',
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class, 'class_room_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subjects_id');
    }
}
