<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Laravel\Sanctum\NewAccessToken;

class Users extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'users';
}
