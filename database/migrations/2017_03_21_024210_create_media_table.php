<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('alias');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
			$table->string('featured_image')->nullable()->default(null);
			$table->text('short_content')->nullable()->default(null);
			$table->longText('long_content')->nullable()->default(null);
			$table->integer('view_count')->nullable()->default(0);
			
			// Flag
			$table->boolean('home_flag');
			$table->boolean('hot_flag');
			$table->boolean('enable');

			// SEO
			$table->text('meta_title')->nullable()->default(null);
			$table->text('meta_description')->nullable()->default(null);
			$table->text('meta_keyword')->nullable()->default(null);
			
			// Updater Info
			$table->string('created_by')->nullable()->default(null);
			$table->string('updated_by')->nullable()->default(null);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media');
	}

}
