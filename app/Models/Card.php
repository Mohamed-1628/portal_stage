<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Card extends Model
{
    use Favoriteable;
    protected $table='cards';
    protected $fillable= ['id','name','image','link','btn','description','order'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
   
}
