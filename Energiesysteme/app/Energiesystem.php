<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EnergiesystemController;


class Energiesystem extends Model
{
    
    protected $table = 'energiesysteme';

    protected $primaryKey = 'id';

    protected $name = 'name';

    protected $art = 'art';

    protected $lg= 'lg';

    protected $bg = 'bg';

  

    //protected $timestamps = true;

    //protected $dateFormat = 'mm:ss:hh';

}
