<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submission';

    protected $fillable =
    [
        'user_id',
        'main_title',
        'title_1',
        'text_1',
        'title_2',
        'text_2',
        'title_3',
        'text_3',
        'image',
        'image_path',
        'money_goals',
        'reception_deadline'
    ];
}
