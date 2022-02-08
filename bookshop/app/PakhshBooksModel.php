<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PakhshBooksModel extends Model
{
    //
    protected $table='tbl_pakhsh_books';
    public $timestamps=false;
    protected $fillable = [
        'id_book','id_pakhsh',
    ];
}
