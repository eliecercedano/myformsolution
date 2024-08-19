<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_User extends Model
{
    use HasFactory;

    protected $table = "form_user";
    protected $guarded = [];
}
