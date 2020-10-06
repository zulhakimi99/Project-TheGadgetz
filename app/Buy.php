<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = ['user_id','nama','alamat','negeri','no_phone','product','price'];
    protected $table = 'buys';
}
