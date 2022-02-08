<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentSefareshsModel extends Model
{
    //
    protected $table='tbl_contentsefareshs';
    public $timestamps=false;
    protected $fillable = [
        'id_sefareshats', 'id_books','count',
    ];
}
