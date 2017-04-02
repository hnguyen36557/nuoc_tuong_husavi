<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';
	protected $fillable = ['id', 'name', 'alias', 'featured_image', 'short_content', 'long_content', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
