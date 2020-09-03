<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $fillable = ['name', 'uid_phone','firebase_token','profile_image', 'type', 'email','password'];

    public function fullname() {
        return $this->name ;
    }
}
