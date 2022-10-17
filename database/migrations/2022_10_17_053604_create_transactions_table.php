<?php

use App\Models\{User, Outlet};
// use App\Models\Outlet;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('pajak');
            $table->date('batas_waktu');
            $table->date('tanggal_pembayaran');
            $table->string('code_invoice', 100);
            $table->double('diskon')->default(0);
            $table->integer('status_proses')->default(0);
            $table->integer('biaya_tambahan')->default(0);
            $table->integer('status_pembayaran')->default(0);
            $table->foreignIdFor(Outlet::class)->cascadeOnDelete();
            $table->foreignIdFor(User::class)->cascadeOnDelete();
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
        Schema::dropIfExists('transactions');
    }
};
