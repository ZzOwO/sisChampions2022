<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    //Relación uno a muchos
    protected $fillable=['name', 'address'];
    public function games(){
        return $this->hasMany(Game::class);
    }
}
