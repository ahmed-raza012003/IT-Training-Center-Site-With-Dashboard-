<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'name',
        'duration',
        'outline',
        'instructor',
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function timings()
    {
        return $this->hasMany(Timing::class);
    }
    public function instructors()
    {
        return $this->hasMany(Instructor::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
