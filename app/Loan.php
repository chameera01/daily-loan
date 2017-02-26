<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount', 'start_date', 'status'
    ];

    protected $dates = [
        'start_date'
    ];

    public $timestamps = false;

}
