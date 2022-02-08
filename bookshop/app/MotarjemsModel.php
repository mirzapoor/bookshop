<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotarjemsModel extends Model
{
    //
    protected $table='tbl_motarjems';
    public $timestamps=false;
    protected $fillable = [
        'name_motarjems','lname_motarjems','age_motarjems','maghtah_motarjems',
        'reshtah_motarjems','phone_motarjems',
        'details_motarjems','email_motarjems','website_motarjems',
    ];
}
