<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallMeModel extends Model
{
    protected $table='callme';
    public $timestamps=false;
    protected $fillable = [
        'fname', 'lname', 'email','date','content','ansewer','state','olaviyat',
    ];
    //
}
