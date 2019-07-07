<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'matches';

    /**
     * Run the migrations.
     * @table matches
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_home');
            $table->string('name_away');
            $table->dateTime('datetime');

            $table->integer('result_team')->nullable();
            $table->integer('result_opponent')->nullable();

            $table->integer('homescored')->nullable();
            $table->integer('homeshots')->nullable();
            $table->string('homeshotspercentage')->nullable();

            $table->integer('homedrebounds')->nullable();
            $table->integer('homearebounds')->nullable();
            $table->integer('hometotalrebounds')->nullable();

            $table->integer('homefshots')->nullable();
            $table->integer('homefshotsscored')->nullable();
            $table->string('homefshotspercentage')->nullable();

            $table->integer('awayscored')->nullable();
            $table->integer('awayshots')->nullable();
            $table->string('awayshotspercentage')->nullable();

            $table->integer('awaydrebounds')->nullable();
            $table->integer('awayarebounds')->nullable();
            $table->integer('awaytotalrebounds')->nullable();

            $table->integer('awayfshots')->nullable();
            $table->integer('awayfshotsscored')->nullable();
            $table->string('awayfshotspercentage')->nullable();
            $table->unsignedBigInteger('seasons_id')->unsigned()->nullable();

            //$table->index(["seasons_id"], 'fk_matches_seasons_idx');
            $table->nullableTimestamps();


            $table->foreign('seasons_id')
                ->references('id')->on('seasons')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
