<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    //Declare model fillable
    protected $fillable = ['name', 'ref_no', 'client', 'description', 'date', 'budget'];
    // public $table = 'proposalsys';
}
