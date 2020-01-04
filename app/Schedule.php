<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedules"; //nama tabel

    protected $fillable = [
        'datetime',
        'course_id',
        'tutor_id',
        'status'
    ]; // nama kolom
    

    public $timestamps = false; //timestamps di nonaktifkan

    public function tutorPresences()
    {
        return $this->belongsTo(TutorPresences::class);
    }

    public function studentPresences()
    {
        return $this->belongsTo(StudentPresences::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
