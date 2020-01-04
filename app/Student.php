<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students"; //nama tabel

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

    public function studentPresence()
    {
        return $this->belongsTo(StudentPresences::class);
    }

}
