<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('alias');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
			$table->string('featured_image')->nullable()->default(null);
			$table->string('library_image')->nullable()->default(null);
			$table->integer('price')->nullable()->default(0);
			$table->integer('order')->nullable()->default(0);
			$table->text('short_content')->nullable()->default(null);
			$table->longText('long_content')->nullable()->default(null);
			
			// Flag
			$table->boolean('enable');
			$table->boolean('home_flag');
			$table->boolean('hot_flag');
			$table->boolean('saleoff_flag');
			$table->boolean('new_flag');

			// SEO
			$table->string('meta_title')->nullable()->default(null);
			$table->string('meta_description')->nullable()->default(null);
			$table->string('meta_keywords')->nullable()->default(null);

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
		Schema::drop('products');
	}

}
