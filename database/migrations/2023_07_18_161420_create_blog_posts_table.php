<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('introduction');
            $table->text('content');
            $table->string('first_image_url');
            $table->string('first_image_caption')->nullable();
            $table->string('second_image_url');
            $table->string('second_image_caption')->nullable();
            $table->string('third_image_url');
            $table->string('third_image_caption')->nullable();
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('blog_posts');
    }
}
