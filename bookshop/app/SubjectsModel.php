<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectsModel extends Model
{
    //
    protected $table='tbl_subjects';
    public $timestamps=false;
    protected $fillable = [
        'name_subjects','details_subjects','replay_subjects',
    ];
}
