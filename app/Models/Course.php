<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'courses';

    protected $fillable = [
      'course_number',
      'day',
      'area_id',
      'training_center_id'
    ];

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function trainingCenter(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }

    public function teachers(){
    return $this->belongsToMany('App\Models\Teacher','course_teachers');
}

    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }
}