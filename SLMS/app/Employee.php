<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['emp_id','dep_id','hod_id','e_name','e_email','e_designation','e_phoneno','e_address','e_password'];
}

