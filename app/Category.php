<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categorys';
	protected $fillable = ['id', 'name', 'alias', 'parent_id', 'featured_image', 'content', 'type', 'home_flag', 'hot_flag', 'enable', 'menu', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at'];
	public $timestamps = true;
	public function posts()
	{
		return $this->belongsTo('App\Post');
	}
	public function medias()
	{
		return $this->belongsTo('App\Media');
	}
	public function products()
	{
		return $this->belongsTo('App\Product');
	}

}
