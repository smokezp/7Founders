<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'study_field',
        'start_year',
        'end_year'
    ];

    protected $table = 'educations';

}
