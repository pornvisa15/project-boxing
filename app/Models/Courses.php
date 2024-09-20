<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'course_name',
        'course_category',
        'course_duration',
        'course_other',
        'course_price',
        'course_teacher',
        'course_begin',
        'course_stop',
        'course_image',

    ];
}
