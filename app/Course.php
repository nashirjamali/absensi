<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses"; //nama tabel

    protected $fillable = [
        'name'
    ]; // nama kolom
    

    public $timestamps = false; //timestamps di nonaktifkan    


    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
