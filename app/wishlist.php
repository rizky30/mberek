<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    //
    protected $fillable = ['nama','email','telepon','request','deskripsi'];

    protected $primaryKey = 'id_wishlist';

    protected  $table='wishlist';
}
