<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardUser extends Model
{
    use HasFactory;
    protected $table = 'card_user';
    protected $fillable=[
        'user_id',
        'card_id',
    ];
}
