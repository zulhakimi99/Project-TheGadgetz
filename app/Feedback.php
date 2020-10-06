<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['nama','rating','coment'];
    protected $table = 'feedbacks';
}
