<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChaphkonehsModel extends Model
{
    //
    protected $table='tbl_chapkhonehs';
    public $timestamps=false;
    protected $fillable = [
        'name_chapkhonehs', 'year_chapkhonehs','phone_chapkhonehs','email_chapkhonehs',
        'website_chapkhonehs','address_chapkhonehs','details_chapkhonehs',
    ];
}
