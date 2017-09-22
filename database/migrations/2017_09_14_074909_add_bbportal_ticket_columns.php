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

            $table->string('uuid');
            $table->integer('NIK');
            $table->string('pengemudi');
            $table->string('nomer_mobil');
            $table->string('jenis_komplain');
            $table->string('sub-jenis_komplain');
            $table->text('isi_komplain');
            $table->string('hasil_proses');
            $table->string('penyelesaian_tamu');
            $table->string('sanksi');
            $table->text('kesimpulan');

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
            //
        });
    }
}
