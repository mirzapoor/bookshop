<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PakhshModel extends Model
{
    //
    protected $table='tbl_pakhsh';
    public $timestamps=false;
    protected $fillable = [
        'name_pakhsh','phone_pakhsh','fax_pakhsh','email_pakhsh',
        'website_pakhsh','address_pakhsh','details_pakhsh',
    ];
}
