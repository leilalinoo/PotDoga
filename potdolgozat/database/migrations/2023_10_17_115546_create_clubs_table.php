<?php

use App\Models\Club;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id('club_id');
            $table->date('establishment');
            $table->string('location', 150);
            $table->integer('max_number');
            $table->timestamps();
        });
        Club::create([
            'establishment' => '2023-12-20',
            'location' => 'Budapest Váci út 4',
            'max_number' => '400'
        ]);

        Club::create([
            'establishment' => '2023-10-09',
            'location' => 'Esztergom Főapát utca 1',
            'max_number' => '200'
        ]);

        Club::create([
            'establishment' => '2023-11-30',
            'location' => 'Kesztölc Borospincék',
            'max_number' => '100'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
