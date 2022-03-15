<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WritersModel extends Model
{
    //
    protected $table='tbl_writers';
    public $timestamps=false;
    protected $fillable = [
        'name_writers', 'lname_writers','details_writers','website_writers',
        'phone_writers','address_writers',
    ];
}
