<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_primary_info extends Model
{
    use HasFactory;

    protected $table="student_primary_info";

    protected $fillable=['firstname','gender','email','password','phone','dob','department'];

   public function student_second_info()
{
    
        return $this->hasOne(student_secondary_info::class,'stud_id','id');
}
// 
}

