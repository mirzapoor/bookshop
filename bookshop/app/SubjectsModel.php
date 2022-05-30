<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class SubjectsModel extends Model
{
    use Searchable;

    protected $table='tbl_subjects';
    public $timestamps=false;
    protected $fillable = [
        'name_subjects','details_subjects','replay_subjects',
    ];
}