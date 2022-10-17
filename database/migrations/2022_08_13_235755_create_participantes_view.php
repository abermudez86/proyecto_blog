<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
use Staudenmeir\LaravelMigrationViews\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $query = DB::table('users')
                ->select(['id','name','email','estado'])
                ->where('estado', 'A');

        Schema::createView('participantes', $query);
        //\DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropViewIfExists('participantes');
        //\DB::statement($this->dropView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        return <<<SQL
CREATE VIEW 'participantes' AS
SELECT
    users.id,
    users.name,
    users.email,
    users.estado
FROM users
SQL;

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     private function dropView(): string
    {
        return <<<SQL
DROP VIEW IF EXISTS 'participantes';
SQL;

    }

};
