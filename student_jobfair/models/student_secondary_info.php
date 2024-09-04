<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_secondary_info extends Model
{
    use HasFactory;

    protected $table="student_secondary_info";

    protected $fillable=['firstname','lastname','course','hsc_percentage','aadhar_no','nationality','fathername','mothername','fatherphone','motherphone','address','account_no','bankname','ifsc_code'];

    function student_prima_info()
    {
        return $this->belongsTo(student_primary_info::class);
    }
}
