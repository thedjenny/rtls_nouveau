<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $fillable = ['name', 'uid_phone', 'type', 'email','password'];

    public function fullname() {
        return $this->name ;
    }
}
