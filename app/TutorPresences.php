<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorPresences extends Model
{
    protected $table = "tutor_presences"; //nama tabel

    protected $fillable = [
        'tutor_id',
        'schedule_id',
        'datetime',
        'status'
    ]; // nama kolom
    

    public $timestamps = false; //timestamps di nonaktifkan

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }

    public function tutor()
    {
        return $this->hasMany(Tutor::class);
    }
}
