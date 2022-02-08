<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SefareshatsModel extends Model
{
    //
    protected $table='tbl_sefareshats';
    public $timestamps=false;
    protected $fillable = [
        'codepaygiry_sefareshats','codesefsresh_sefareshats	','name_sefareshats','lname_sefareshats',
        'phone_sefareshats','mobile_sefareshats','email_sefareshats','address_sefareshats',
        'state','price','id_get','trans_id',
    ];
}
