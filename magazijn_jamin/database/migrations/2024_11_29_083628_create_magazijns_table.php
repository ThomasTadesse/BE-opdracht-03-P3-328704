<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('Naam', 255);
            $table->string('Barcode', 13);
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen')->nullable()->default(null);
            $table->dateTime('DatumAangemaakt', 6)->default(DB::raw('CURRENT_TIMESTAMP(6)'));
            $table->dateTime('DatumGewijzigd', 6)->default(DB::raw('CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)'));
            $table->timestamps();
        });

        Schema::create('leveranciers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('Naam', 60);
            $table->string('Contactpersoon', 60);
            $table->string('Leveranciernummer', 11);
            $table->string('Mobiel', 11);
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen')->nullable()->default(null);
            $table->dateTime('DatumAangemaakt', 6)->default(DB::raw('CURRENT_TIMESTAMP(6)'));
            $table->dateTime('DatumGewijzigd', 6)->default(DB::raw('CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)'));
            $table->timestamps();
        });

        Schema::create('product_per_leveranciers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('LeverancierId');
            $table->unsignedBigInteger('ProductId');
            $table->date('DatumLevering');
            $table->unsignedInteger('Aantal');
            $table->date('DatumEerstVolgendeLevering')->nullable();
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen')->nullable()->default(null);
            $table->dateTime('DatumAangemaakt', 6)->default(DB::raw('CURRENT_TIMESTAMP(6)'));
            $table->dateTime('DatumGewijzigd', 6)->default(DB::raw('CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)'));
            $table->timestamps();

            $table->foreign('LeverancierId')->references('id')->on('leveranciers');
            $table->foreign('ProductId')->references('id')->on('product');
        });

        Schema::create('allergenen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('Naam', 60);
            $table->string('Omschrijving', 60);
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen')->nullable()->default(null);
            $table->dateTime('DatumAangemaakt', 6)->default(DB::raw('CURRENT_TIMESTAMP(6)'));
            $table->dateTime('DatumGewijzigd', 6)->default(DB::raw('CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)'));
            $table->timestamps();
        });

        Schema::create('product_per_allergenen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('AllergeenId');
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen')->nullable()->default(null);
            $table->dateTime('DatumAangemaakt', 6)->default(DB::raw('CURRENT_TIMESTAMP(6)'));
            $table->dateTime('DatumGewijzigd', 6)->default(DB::raw('CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)'));
            $table->timestamps();

            $table->foreign('ProductId')->references('id')->on('product');
            $table->foreign('AllergeenId')->references('id')->on('allergenen');
        });

        Schema::create('magazijn', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('ProductId');
            $table->decimal('VerpakkingsEenheid', 4, 1);
            $table->unsignedSmallInteger('AantalAanwezig');
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerkingen')->nullable()->default(null);
            $table->dateTime('DatumAangemaakt', 6)->default(DB::raw('CURRENT_TIMESTAMP(6)'));
            $table->dateTime('DatumGewijzigd', 6)->default(DB::raw('CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)'));
            $table->timestamps();

            $table->foreign('ProductId')->references('id')->on('product');
        });

        DB::statement('ALTER TABLE magazijn ADD CONSTRAINT chk_VerpakkingsEenheid CHECK (VerpakkingsEenheid > 0)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_allergenen');
        Schema::dropIfExists('allergenen');
        Schema::dropIfExists('product_per_leveranciers');
        Schema::dropIfExists('leveranciers');
        Schema::dropIfExists('magazijn');
        Schema::dropIfExists('products');
    }
};
