<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table = 'tbluser';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'username', 
        'password',
        'gender',
        'jobid'
    ];
}