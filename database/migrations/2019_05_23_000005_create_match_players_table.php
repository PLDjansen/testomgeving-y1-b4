<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchPlayersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'match_players';

    /**
     * Run the migrations.
     * @table match_players
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('amount_of_shots')->nullable();
            $table->unsignedInteger('amount_of_shots_scored')->nullable();
            $table->unsignedInteger('amount_of_penalties')->nullable();
            $table->unsignedInteger('amount_of_penalties_scored')->nullable();
            $table->unsignedInteger('amount_of_free_throws')->nullable();
            $table->unsignedInteger('amount_of_free_throws_scored')->nullable();
            $table->unsignedInteger('amount_of_defensive_rebounds')->nullable();
            $table->unsignedInteger('amount_of_offensive_rebounds')->nullable();
            $table->unsignedInteger('amount_of_assists')->nullable();
            $table->unsignedInteger('opponent_number')->nullable();
            $table->unsignedInteger('opponent_amount_of_shots')->nullable();
            $table->unsignedInteger('opponent_amount_of_shots_scored')->nullable();
            $table->unsignedInteger('opponent_amount_of_defensive_rebound')->nullable();
            $table->unsignedInteger('opponent_amount_of_offensive_rebound')->nullable();
            $table->unsignedBigInteger('matches_id')->unsigned()->nullable();
            $table->unsignedBigInteger('players_id')->unsigned()->nullable();

            //$table->index(["players_id"], 'fk_match_players_players1_idx');

            //$table->index(["matches_id"], 'fk_match_players_matches1_idx');


            $table->foreign('matches_id')
                ->references('id')->on('matches')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('players_id')
                ->references('id')->on('players')
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
