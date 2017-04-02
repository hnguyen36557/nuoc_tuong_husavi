<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	protected $fillable = ['id', 'name', 'alias', 'category_id', 'featured_image', 'library_image', 'price', 'order', 'short_content', 'long_content', 'enable', 'home_flag', 'hot_flag', 'saleoff_flag', 'new_flag', 'meta_title', 'meta_description', 'meta_keywords', 'created_by', 'updated_by', 'created_at', 'updated_at'];
	public $timestamps = true;

}
