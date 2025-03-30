<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class CreateRegionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regionals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('label');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('regionals')->insert([
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'Alto tietê'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'Interior'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'ES'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'SP Interior'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'SP'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'SP2'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'MG'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'Nacional'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'SP CAV'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'RJ'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'SP1'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'NE1'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'NE2'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'SUL'],
            ['id' => (string) Uuid::uuid4()->toString(), 'label' => 'Norte'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regionals');
    }
}
