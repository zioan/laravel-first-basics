<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // by convention model name is the singular form of table name (table = students / model = student)
    // in this case nothing must done

    // if the model is not the same (singular form) with the table
    // protected $table = "my_students"; (this is the table name)

    //

    // by default the id table is recognized
    // if the default table id is something like "student_id"
    // protected $primaryKey = "student_id

    //s.a.m.d.
    // protected $keyType = 'string'
}

