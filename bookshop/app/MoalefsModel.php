<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoalefsModel extends Model
{
    //
    protected $table='tbl_moalefs';
    public $timestamps=false;
    protected $fillable = [
        'name_moalefs', 'lname_moalefs','details_moalefs','website_moalefs',
        'phone_moalefs','address_moalefs',
    ];
}
