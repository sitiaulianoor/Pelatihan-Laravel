<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{

	protected $table = 'homestay';
	protected $fillable = [
		'homestay_name','homestay_addr',
		];
}

?>