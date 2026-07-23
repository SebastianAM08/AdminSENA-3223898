<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'apprentices';

   protected $fillable = [
        'name',
        'email',
        'cell_number',
        'course_id',
        'computer_id'
    ];

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    public function computer(){
        return $this->belongsTo('App\Models\Computer');
    }
}