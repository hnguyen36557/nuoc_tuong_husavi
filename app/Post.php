<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'posts';
	protected $fillable = ['id', 'name', 'alias', 'category_id', 'featured_image', 'short_content', 'long_content', 'view_count', 'home_flag', 'hot_flag', 'enable', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at'];
	public $timestamps = true;
	
	

}
