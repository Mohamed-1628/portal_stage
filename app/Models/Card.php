<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table='cards';
    protected $fillable= ['id','name','image','link','btn','description','order'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
