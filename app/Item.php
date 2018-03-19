<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

	/**
	 *	List the VO fields that are allowed to be assigned with mass (?unlimited/unspecific?) queries
	 * @var array $fillable
	 */
	protected $fillable = [
		"name", "description", "price", "qty", "description", "notes"
	];
	
}
