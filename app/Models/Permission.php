<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

	public $table = "permissions";

	public $primaryKey = "id";

	public $timestamps = true;

	public $fillable = [
	    "name"
	];

	public static $rules = [
	    "name" => "required"
	];

}