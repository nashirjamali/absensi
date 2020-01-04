<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = "tutors"; //nama tabel

    protected $fillable = [
        'full_name',
        'gender',
        'address',
        'phone',
        'course_id',
    ]; // nama kolom
    

    public $timestamps = false; //timestamps di nonaktifkan

    public function course()
    {
        return $this->hasMany(Course::class);
    }

    public function tutorPresence()
    {
        return $this->belongsTo(TutorPresences::class);
    }
}
