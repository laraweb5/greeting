<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    //挿入できるようにカラムを宣言
    protected $fillable = ['onamae'];
}
