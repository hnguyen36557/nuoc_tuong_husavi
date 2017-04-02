<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('alias');
			$table->integer('parent_id');
			$table->string('featured_image')->nullable()->default(null);
			$table->text('content')->nullable()->default(null);
			$table->char('type',10);// loại danh mục:, vd: Tin tức, sản phẩm, hình ảnh....
			// Flag
			$table->boolean('enable')->nullable()->default(null);

			//SEO
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
		Schema::drop('categorys');
	}

}
