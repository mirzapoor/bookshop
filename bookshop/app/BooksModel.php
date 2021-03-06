<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class BooksModel extends Model
{
    use Searchable;

    protected $table='tbl_books';
    public $timestamps=false;
    protected $fillable = [
        'name_book', 'count_book', 'price_book','shabook_book',
        'details_book','id_chapkhonehs','id_subjects','id_users','img_book',
        'state_book','view_book','url_book',
    ];
    //
}


