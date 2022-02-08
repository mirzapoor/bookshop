<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoalefBooksModel extends Model
{
    //
    protected $table='tbl_moalef_books';
    public $timestamps=false;
    protected $fillable = [
        'id_books', 'id_moalef',
    ];
}
