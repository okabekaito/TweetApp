<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content', 300,);
            $table->timestamps();

            $table->unsignedBigInteger('user_id'); //カラム追加
            $table->foreign('user_id') //外部キー制約
                ->references('id')->on('users') //ｕｓｅｒｓテーブルのidを参照する
                ->onDelete('cascade');  //ユーザーが削除されたら紐付くpostsも削除

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_forms');
    }
}
