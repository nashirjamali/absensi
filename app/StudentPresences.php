<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPresences extends Model
{
    protected $table = "student_presences"; //nama tabel

    protected $fillable = [
        'student_id',
        'schedule_id',
        'datetime',
        'status'
    ]; // nama kolom


    public $timestamps = false; //timestamps di nonaktifkan

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
