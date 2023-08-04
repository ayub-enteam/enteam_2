<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_type_leaves', function (Blueprint $table) {
            $table->id();
            $table->string('status_name')->nullable();
            $table->timestamps();
        });

        DB::table('status_type_leaves')->insert([
            ['status_name' => 'Approve'],
            ['status_name' => 'Decline']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_type_leaves');
    }
};
