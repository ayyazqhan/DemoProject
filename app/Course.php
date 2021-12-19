<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    public $table = 'courses';

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
        'description'
    ];
    
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id', 'id');
    }
    
    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class);
    }

    public function getPrice()
    {
        return $this->price ? '$'.number_format($this->price, 2) : 'FREE';
    }
    
    public function scopeSearchResults($query)
    {
        $query->when(request('discipline'), function($query) {
                $query->whereHas('disciplines', function($query) {
                    $query->whereId(request('discipline'));
                });
            });
    }
}
