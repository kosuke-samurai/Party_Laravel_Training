<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResisterAdmin extends Model
{
    use HasFactory;
    protected $table = 'administrators';

    protected $fillable = ['email', 'password', 'project_number'];
}
