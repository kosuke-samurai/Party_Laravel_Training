<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\App\Http\Models\Administrator;

class Users_Topi extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users_topis';
    protected $fillable = ['name', 'password', 'title', 'body', 'kokopoi_question', 'kokopoi_answer', 'emb_img_title', 'administrators_id'];

    /*
    public function admin()
    {
        return $this->newBelongsTo(Administrator::class);
    }
    */
}
