<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class OrderSystem extends Model
{
    use Uuids;
    protected $table = 'OrderSystem';
    protected $fillable = ['email','amount','status','userId'];
}
