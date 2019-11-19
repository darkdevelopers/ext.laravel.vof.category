<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCategoryMetaTable
 */
class CreateCategoryMetaTwitterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_metas_twitter', function (Blueprint $table) {
            $table->unsignedBigInteger('category_meta_id')->index();
            $table->foreign('category_meta_id')->references('id')->on('category_metas')->onDelete('cascade');
            $table->string('twitter:image')->default('')->nullable(true);
            $table->string('twitter:title')->default('')->nullable(true);
            $table->string('twitter:description')->default('')->nullable(true);
            $table->string('twitter:site')->default('')->nullable(true);
            $table->string('twitter:card')->default('')->nullable(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_metas_twitter');
    }
}
