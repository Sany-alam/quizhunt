<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = [
        'question','option_1','option_2','option_3','option_4','correct_option',
    ];
}
