<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';
    //hasFactory;
    protected $fillable =['title','body','author','published']; //fieled that ca be updated

    protected $guarde =['id'] ;  // cannot be upfsted/assigned (readonly)
    

}
