<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';

    protected $fillable = [
        'first_name',
        'first_name',
        'email',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id', 'id');
    }
}
