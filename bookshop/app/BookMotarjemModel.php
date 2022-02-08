<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookMotarjemModel extends Model
{
    //
    protected $table='tbl_book_motarjem';
    public $timestamps=false;
    protected $fillable = [
        'id_book', 'id_motarjems', 
    ];
}
