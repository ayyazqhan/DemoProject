<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use SoftDeletes;

    public $table = 'enrollments';

    protected $fillable = [
        'status',
        'user_id',
        'course_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    const STATUS_RADIO = [
        'awaiting' => 'Awaiting',
        'accepted' => 'Accepted',
        'rejected' => 'Rejected',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
