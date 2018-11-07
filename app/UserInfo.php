<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_project',
        'marco_task',
        'cd_founder',
        'status_range_start',
        'status_range_end',
        'company_name',
        'active_industry',
        'job_title',
        'worked_here',
    ];

    protected $table = 'user_info';
}
