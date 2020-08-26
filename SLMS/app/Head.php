<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    protected $fillable = ['hod_id','dep_id','h_name','h_designation','h_email','h_phoneno','h_password'];
}
