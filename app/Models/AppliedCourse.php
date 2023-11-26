<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedCourse extends Model
{
    use HasFactory;
    protected $fillable = [
      'status', // Add 'status' to the fillable fields
      // Other fillable fields if you have any
  ];
    public function course_name()
    {
      return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function user_email()
    {
      return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function cohort_name()
    {
      return $this->hasOne(Cohort::class, 'id', 'cohort_id');
    }
}
