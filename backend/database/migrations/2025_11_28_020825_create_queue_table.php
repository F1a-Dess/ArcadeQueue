<?php

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
        Schema::create('queue_items', function (Blueprint $table) {
            $table->id();

            // Creates the 'cabinet_id' foreign key column and links it to 'cabinets' table
            // 'onDelete('cascade')' ensures that if a cabinet is deleted, its associated queue items are also deleted
            $table->foreignId('cabinet_id')->constrained()->onDelete('cascade');
            
            $table->string('type'); // solo or duo
            $table->json('players'); // Stores ["player1", "player2"]
            $table->integer('position')->default(0); // Position in the queue
            $table->boolean('is_playing')->default(false); // Whether the item has been matched
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queue_items');
    }
};
