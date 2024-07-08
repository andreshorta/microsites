<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Constants\DocumentTypes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 20)->unique();
            $table->string('name', 25);
            $table->enum('document_type', DocumentTypes::all())->default(DocumentTypes::CC);
            $table->string('document', 15);
            $table->string('category_id')->constrained('categories');
            $table->string('logo');
            $table->timestamp('enabled_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
