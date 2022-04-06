<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountPrintsModel extends Model
{
    //
    protected $table='tbl_countprints';
    public $timestamps=false;
    protected $fillable = [
        'count_countprints', 'fasle_countprints','year_countprints',
        'moneth_countprints',
        'countbook_countprints','details_countprints','id_books',
    ];
}
