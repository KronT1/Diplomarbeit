<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HashFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEnergiesysteme extends Model
{

    protected $table= 'posts';

    protected $primaryKey = 'id';

    protected $fillable = ['name' , 'art', 'latitude' , 'longtitude'];

}
