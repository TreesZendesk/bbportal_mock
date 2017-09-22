<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBbportalTicketColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticketit', function (Blueprint $table) {
            //
            // {
            // 	"uuid": "90821930201938fbca923a"
            // 	"NIK": "123abc",
            // 	"pengemudi": "andi",
            // 	"nomer_mobil": "12345",
            // 	"jenis_komplain": "driver salah",
            // 	"sub-jenis_komplain": "Ugal ugalan",
            // 	"isi_komplain": "tadi begitu saya",
            // 	"hasil_proses": "pending",
            // 	"penyelesaian_tamu": "",
            // 	"sanksi": "",
            // 	"kesimpulan": ""
            // }

            $table->string('uuid')->nullable();
            $table->string('requester_email')->nullable();
            $table->string('requester_name')->nullable();
            $table->string('NIK')->nullable();
            $table->string('pengemudi')->nullable();
            $table->string('nomer_mobil')->nullable();
            $table->string('jenis_komplain')->nullable();
            $table->string('sub-jenis_komplain')->nullable();
            $table->text('isi_komplain')->nullable();
            $table->string('hasil_proses')->nullable();
            $table->text('penyelesaian_tamu')->nullable();
            $table->string('sanksi')->nullable();
            $table->text('kesimpulan')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticketit', function (Blueprint $table) {
            $table->dropColumn('pengemudi');
            $table->dropColumn('uuid');
            $table->dropColumn('NIK');
            $table->dropColumn('nomer_mobil');
            $table->dropColumn('jenis_komplain');
            $table->dropColumn('sub-jenis_komplain');
            $table->dropColumn('isi_komplain');
            $table->dropColumn('hasil_proses');
            $table->dropColumn('penyelesaian_tamu');
            $table->dropColumn('sanksi');
            $table->dropColumn('kesimpulan');
        });
    }
}
