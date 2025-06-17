<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
       protected $fillable = [
        'user_id',
        'photo',
        'name',
        'DOB',
        'blood_group',
        'email',
        'mobile',
        'address',
        'city',
        'state',
        'age',
        'country',
    ];
    public function user(){
        return $this->belongTo(User::class);
    }
    //
}
