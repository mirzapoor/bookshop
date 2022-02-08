<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsModel extends Model
{
    //
    protected $table='tbl_comments';
    public $timestamps=false;
    protected $fillable = [
        'name_comments', 'lname_comments','email_comments','content_comments',
        'replaye_comments','id_books','state',
    ];
}
