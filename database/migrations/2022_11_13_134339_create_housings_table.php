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
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('stato_annuncio')->nullable();
            $table->text('descrizione')->nullable();
            $table->string('costo')->nullable();
            $table->string('city')->nullable();
            $table->bigInteger('numero_telefono')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->softDeletes();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('housings');
    }
};
