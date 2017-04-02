<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {

	protected $table = 'modules';
	protected $fillable = ['id', 'name', 'content'];
	public $timestamps = false;

}
