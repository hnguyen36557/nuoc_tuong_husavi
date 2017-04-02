<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	protected $table = 'pages';
	protected $fillable = ['id', 'name', 'alias','category_id', 'short_content', 'long_content', 'enable', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at'];
	public $timestamps = true;

}
