<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionLoanItems extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CollectionLoan_id', 'Collection_id', 'member_id', 
    ];
}
