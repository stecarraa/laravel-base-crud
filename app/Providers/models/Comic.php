<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    $comics = Comic::all();
    return view('comics.index',compact ('comics'));
}
