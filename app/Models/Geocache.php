<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geocache extends Model
{
    use HasFactory;


    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function delete(){
        $this->comments()->delete();
        return parent::delete();
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
